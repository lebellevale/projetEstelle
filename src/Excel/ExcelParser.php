<?php

declare(strict_types=1);

namespace App\Excel;


use App\Entity\AssMat;
use App\Entity\ListeAssmat;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Symfony\Component\Serializer\Exception\BadMethodCallException;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use Symfony\Component\Serializer\Exception\ExtraAttributesException;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Exception\LogicException;
use Symfony\Component\Serializer\Exception\RuntimeException;
use Symfony\Component\Serializer\Exception\UnexpectedValueException;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;



class ExcelParser
{
    public function denormXlsx(AssMat $assMat, array $ligne): void
    {
        $assMat->setDispo($ligne['A']);
        $assMat->setPlace((int)$ligne['B']);
        $assMat->setCivilite($ligne['C']);
        $assMat->setNomPrenom($ligne['D']);
        $assMat->setAdresse($ligne['E']);
        $assMat->setCodePostal($ligne['F']);
        $assMat->setVille($ligne['G']);
        $assMat->setTelFixe((int)$ligne['H']);
        $assMat->setTelPortable((int)$ligne['I']);
        $assMat->setPremierAgrement($ligne['J']);
        $assMat->setSecteur($ligne['K']);
        $assMat->setSamediMatin($ligne['L']);
        $assMat->setSamediAprem($ligne['M']);
        $assMat->setDimancheMatin($ligne['N']);
        $assMat->setDimancheAprem($ligne['O']);
        $assMat->setNuit($ligne['P']);
        $assMat->setRenouvAgrement($ligne['Q']);
        $assMat->setObs($ligne['R']);
        $assMat->setDateNaissance($ligne['S']);
        $assMat->setMail($ligne['T']);
        $assMat->setDateDepart($ligne['U']);
        $assMat->setObservations($ligne['V']);
        $assMat->setDisponibilite1($ligne['W']);
        $assMat->setDisponibilite2($ligne['X']);
        $assMat->setDisponibilite3($ligne['Y']);
        $assMat->setDisponibilite4($ligne['AA']);
        $assMat->setActivite($ligne['AB']);
        $assMat->setVisio($ligne['AC']);
        $assMat->setParticipeActivite($ligne['AD']);

    }

    public function xlsx(Request $request): void
    {
        $fileFolder = __DIR__.'/../../src/ExcelFile/';
        $spreadsheet = IOFactory::load($fileFolder . 'ASMBourg.xlsx');
        $row = $spreadsheet->getActiveSheet()->removeRow(1);
        $sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);

        $listeAssmat = new ListeAssmat();

        foreach ($sheetData as $ligne){
            if ($ligne['C'] !== null){
                $assMats= new AssMat();
                $this->denormXlsx($assMats, $ligne);
                $listeAssmat->ajoutAssMat($assMats);
            }

        }
        dd($listeAssmat);
    }




}