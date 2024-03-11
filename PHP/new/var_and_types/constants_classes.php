<?php
// Константы класса

class ConstantClass{
    const NAME = 'const';
}

echo ConstantClass::NAME; // обращение к контстантам через два двоеточия
echo defined(ConstantClass::NAME);
