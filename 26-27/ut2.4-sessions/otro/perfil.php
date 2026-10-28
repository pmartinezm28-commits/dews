<?php
session_start();
$alias = $_SESSION['alias'] ?? 'Visitante';
echo 'Bienvenido, ' . htmlspecialchars($alias, ENT_QUOTES, 'UTF-8');
