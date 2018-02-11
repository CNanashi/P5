<?php

$message = $_POST['message'];

$headers = 'FROM: site@local.dev';

mail('Nasunalink@gmail.com', 'Formulaire de contact', $message, $headers);