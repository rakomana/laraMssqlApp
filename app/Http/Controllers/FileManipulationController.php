<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FileManipulation;
use App\Http\Requests\FileManipulationRequest;
use Illuminate\Database\ConnectionInterface as DB;

class FileManipulationController extends Controller
{
    public $db;
    public $fileManipulation;

    public function __construct(DB $db, FileManipulation $fileManipulation)
    {
        $this->db = $db;
        $this->fileManipulation = $fileManipulation;
    }

    public function store(FileManipulationRequest $request)
    {
        if ($request->hasFile('file-manipulation')) {
            $file = $request->file('file-manipulation');
            $file_name = $file->getClientOriginalName();

            $fileManipulation = new $this->fileManipulation();
            $fileManipulation->file_path = $file_name;
            $fileManipulation->save();

            $path = $file->store('uploads');
        }
    }
}
