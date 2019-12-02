<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function create()
    {
        return view('document_word.create_document');
    }
  
    public function store(Request $request)
    {
        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        $section = $phpWord->addSection();
        $text = $section->addText($request->get('name'));
        $text = $section->addText($request->get('email'));
        $text = $section->addText($request->get('clave'),array('name'=>'Arial','size' => 20,'bold' => true));
        $text = $section->addText($request->get('number'),array('name'=>'Arial','size' => 20,'bold' => true));
        $section->addImage("./images/Krunal.jpg");  
        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        $objWriter->save('Documen_word.docx');
        return response()->download(public_path('Documen_word.docx'));
    }
}
