<?php

/*
 * Status route
 */
$adr->get('Status','/',['Service\StatusService','getStatus']);
