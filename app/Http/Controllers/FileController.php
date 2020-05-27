<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File as FacadesFile;
use Imagick;


class FileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('files/create');
    }

    public function store(Request $request)
    {
        request()->validate(
            [
                'upload' => 'required|mimes:pdf|max:2048',
            ]
        );

        if ($request->hasfile('upload')) {
            $file = $request->file('upload');
            $filePath = request()->file('upload')->store('uploads', 'public');

            $pdfThumb = new imagick();
            $pdfThumb->setResolution(100, 100);
            $pdfThumb->readImage('storage/' . $filePath . '[0]');
            $pdfThumb->setImageFormat('jpg');

            $thumbnailPath = preg_replace('/\\.[^.\\s]{3,4}$/', '.jpg', $filePath);
            $pdfThumb->writeImage('storage/' . $thumbnailPath);

            auth()->user()->files()->create(
                [
                    'file_name' => $file->getClientOriginalName(),
                    'file_path' => $filePath,
                    'thumbnail_path' => $thumbnailPath
                ]
            );
        }
        return redirect('/profile/' . auth()->id());
    }

    public function show(File $file)
    {
        return response()->file('storage/' . $file->file_path);
    }

    public function showAllDocuments()
    {
        $files = DB::table('files')->latest()->paginate(20);
        return view('/files/show', compact('files'));
    }

    public function delete($id)
    {
        $fileToDelete = File::query()->findOrFail($id);

        FacadesFile::delete(public_path("storage/{$fileToDelete->file_path}"));
        FacadesFile::delete(public_path("storage/{$fileToDelete->thumbnail_path}"));

        if ($fileToDelete->delete()) {
            return redirect()->back()->with('success', 'PDF file is deleted!');
        }
        return redirect()->back()->with('error', 'Failed to delete this file!');
    }
}
