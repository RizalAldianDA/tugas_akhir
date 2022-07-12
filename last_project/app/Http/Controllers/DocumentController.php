<?php

namespace App\Http\Controllers;

use App\Document;
use Illuminate\Http\Request;
use File;

class DocumentController extends Controller
{
    public function create()
    {
        return view('file.create');
    }
    public function store(Request $request)
    {
        $validateData = $request->validate([
        'file_name' => 'required',
        'file' => 'required|file|max:100000',
        'publisher_file' => '',
        'description' => '',
        ]);
        $document = new Document();
        $document->file_name = $validateData['file_name'];
        if($request->hasFile('file'))
        {
            $extFile = $request->file->getClientOriginalExtension();
            $namaFile = 'Import-File'.".".$extFile;
            $path = $request->file->move('assets/files',$namaFile);
            $document->file = $path;
        }
        $document->publisher_file = $validateData['publisher_file'];
        $document->description = $validateData['description'];
        $document->save();
        $request->session()->flash('pesan','Penambahan file berhasil');
        return redirect()->route('file.index');
    }
    public function index()
    {
        $documents = Document::all();
        return view('file.index',['documents' => $documents]);
    }
    public function edit($document_id)
    {
        $result = Document::findOrFail($document_id);
        return view('file.edit',['document' => $result]);
    }
    public function update(Request $request, Document $document)
    {
        $validateData = $request->validate([
        'file_name' => 'required',
        'file' => 'required|file|max:100000',
        'publisher_file' => '',
        'description' => '',
        ]);
        $document->file_name = $validateData['file_name'];
        if($request->hasFile('file'))
        {
            $extFile = $request->file->getClientOriginalExtension();
            $namaFile = 'Import-File'.".".$extFile;
            File::delete($document->file);
            $path = $request->file->move('assets/files',$namaFile);
            $document->file = $path;
        }
        $document->publisher_file = $validateData['publisher_file'];
        $document->description = $validateData['description'];
        $document->save();
        $request->session()->flash('pesan','Perubahan file berhasil');
        return redirect()->route('file.index');
    }
    public function destroy(Request $request, Document $document)
    {
        File::delete($document->file);
        $document->delete();
        $request->session()->flash('pesan','Penghapus file berhasil');
        return redirect()->route('file.index');
    }

}
