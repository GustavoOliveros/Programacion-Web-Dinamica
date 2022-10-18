<?php

        use BarcodeBakery\Common\BCGColor;
        use BarcodeBakery\Common\BCGDrawing;
        use BarcodeBakery\Common\BCGFontFile;
        use BarcodeBakery\Common\BCGLabel;

        use BarcodeBakery\Barcode\BCGcode128;

        require 'vendor/autoload.php';

        // Colores
        $colorBlack = new BCGColor(0, 0, 0);
        $colorWhite = new BCGColor(255, 255, 255);

        // Fuente
        $font = new BCGFontFile(__DIR__ . '/font/arial.ttf', 18);

        $code = new BCGcode128();
        $code->setScale(2); // Resolution
        $code->setThickness(30); // Thickness
        $code->setForegroundColor($colorBlack); // Color of bars
        $code->setBackgroundColor($colorWhite); // Color of spaces
        $code->setFont($font); // Font (or 0)
        $code->parse('HELLO'); // Text

        $drawing = new BCGDrawing($code, $colorWhite);
        $drawing->finish(BCGDrawing::IMG_FORMAT_PNG, 'hello.png');

        ?>