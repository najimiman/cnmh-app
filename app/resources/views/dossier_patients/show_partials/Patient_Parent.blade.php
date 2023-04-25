<div class="tab-pane fade show active" id="custom-tabs-two-home" role="tabpanel" aria-labelledby="custom-tabs-two-home-tab">
<div class="col-md-12">
    <div class="card card-primary">
        <div class="card-header">
            <h4 class="card-title">Patient/Bénéficiaire</h4>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="card-refresh" data-source="AfficherDossier.php" data-source-selector="#card-refresh-content" data-load-on-init="false">
                    <i class="fas fa-sync-alt"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="maximize">
                    <i class="fas fa-expand"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-striped projects">
                <tbody>
                    <tr>
                        <td rowspan="3">
                            <img width="99" height="99" src="../assets/dist/img/User-avatar.svg.png">
                        </td>
                        <td>
                            Numero:
                        </td>
                        <td>
                            {{ $dossierPatient->patient_id }}
                        </td>

                    </tr>
                    <tr>
                        <td>
                            Nom:
                        </td>
                        <td>
                            AHOUZI
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Prénom:
                        </td>
                        <td>
                            Hasnae
                        </td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>
                            Sexe:
                        </td>
                        <td>
                            Femme
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            Date de naissance:
                        </td>
                        <td>
                            03 .09 .2011
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            Telephone:
                        </td>
                        <td>
                            06 70 33 08 45
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            CIN/Numéro d'état civil:
                        </td>
                        <td>
                            JE250344
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            Adresse:
                        </td>
                        <td>
                            RUE SEDAM BIR CHIFA TANGER MAROC
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            Date d'enregistrement:
                        </td>
                        <td>
                            03 .09 .2011 / 2:45PM
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            Remarques:
                        </td>
                        <td>
                            ceci est une remarque concernant le patient
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.col -->
<!-- /.col -->
<div class="col-md-12">
    <div class="card card-primary">
        <div class="card-header">
            <h4 class="card-title">Parent/Tuteur</h4>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="card-refresh" data-source="AfficherDossier.php" data-source-selector="#card-refresh-content" data-load-on-init="false">
                    <i class="fas fa-sync-alt"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="maximize">
                    <i class="fas fa-expand"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-striped projects">
                <tbody>
                    <tr>
                        <td>
                            Nom:
                        </td>
                        <td>
                            AHOUZI
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Prénom:
                        </td>
                        <td>
                            Fahd
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Sexe:
                        </td>
                        <td>
                            Homme
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Telephone:
                        </td>
                        <td>
                            06 70 33 08 45
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Email:
                        </td>
                        <td>
                            ahouzifahd@gmail.com
                        </td>
                    </tr>
                    <tr>
                        <td>
                            CIN:
                        </td>
                        <td>
                            K456763
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Adresse:
                        </td>
                        <td>
                            RUE SEDAM BIR CHIFA TANGER MAROC
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Remarques:
                        </td>
                        <td>
                            ceci est une remarque dit par le parent
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
</div>