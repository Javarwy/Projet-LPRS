<?php
include_once '../models/OpportunitesEmploiStage.php';

class OpportunitesEmploiStageController {
    public function index() {
        $opportunitesModel = new OpportunitesEmploiStage();
        $opportunites = $opportunitesModel->getAllOpportunites();

        include_once '../Alumni/Opportunites_emploi_stages.php';
    }
}
?>

