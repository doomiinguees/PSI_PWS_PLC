
                    <h1 class="m-0">Home</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <?php
                $auth = new Auth();
                    if($auth->getRole() != 3){
                ?>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cogs"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Número de Serviços</span>

                            <span class="info-box-number"><?= $nservices ?></span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Número de Utilizadores</span>
                            <span class="info-box-number"><?= $nusers ?> </span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-money-bill-wave"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Número de Folhas de obra</span>
                            <span class="info-box-number"><?= $nfolhas ?></span>
                        </div>
                    </div>
                </div>
                <?php
                    }else{
                ?>
                <div class="col-1 col-sm-1 col-md-1">
                </div>
                        <div class="col-11 col-sm-11 col-md-11">
                                <p style="font-size: large;">
                                    <!--A <b>HD Services</b> é uma empresa de renome no setor dos serviços audiovisuais em Portugal.<br>
                                    Especializados em produção e pós-produção, oferecemos soluções inovadoras e de elevada qualidade para satisfazer as
                                    necessidades dos nossos clientes.<br>
                                    Com uma equipa experiente e dedicada, trabalhamos com os mais recentes equipamentos tecnológicos, garantindo
                                    resultados excecionais em cada projeto.<br>
                                    Desde produções cinematográficas e televisivas até vídeos corporativos e eventos ao vivo, estamos preparados
                                    para enfrentar qualquer desafio audiovisual.<br>
                                    Valorizamos a criatividade, o profissionalismo e o compromisso com a excelência, procurando sempre superar as
                                    expetativas dos nossos clientes e entregar<br> um trabalho final de excelência.-->
                                </p>
                        </div>

                <?php
                    }
                ?>
            </div>
    </section>