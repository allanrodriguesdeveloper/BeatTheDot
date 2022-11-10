<main class="content">
    <?php
    renderTitle(
        'Registrar Ponto',
        'Mantenha seu ponto atualizado',
        'icofont-check-alt'
    );
    include(TEMPLATE_PATH . "/messages.php");
    ?>
    <div class="card">
        <div class="card-header">
            <h3><?= $today ?></h3>
            <p class="mb-0 font-weight-light">Os Batimento efetuados Hoje</p>
        </div>
        <div class="card-body">
            <div class="m-5 d-flex justify-content-around text-center">
                <span class="record"><?= $records->time1 ?? '----' ?>
                    <h6 class="text-secondary font-weight-light text-uppercase">
                        <i class="text-secondary icofont-clock-time m-1"></i>
                        Inicio do expediente</h6></span>
                <span class="record"><?= $records->time2 ?? '----' ?>
                    <h6 class="text-secondary font-weight-light text-uppercase"><i
                                class="text-secondary icofont-clock-time m-1"></i>Saída para refeição</h6></span>
            </div>
            <div class="m-5 d-flex justify-content-around text-center">
                <span class="record"><?= $records->time3 ?? '----' ?>
                    <h6 class="text-secondary font-weight-light text-uppercase"><i
                                class="text-secondary icofont-clock-time m-1"></i>Entrada para refeição</h6></span>
                <span class="record"><?= $records->time4 ?? '----' ?><h6
                            class="text-secondary font-weight-light text-uppercase"><i
                                class="text-secondary icofont-clock-time m-1"></i>Fim do expediente</h6></span>
            </div>
        </div>

        <div class="card-footer d-flex justify-content-end">
            <a href="innout.php" class="btn btn-success btn-lg">
                <i class="icofont-check mr-1"></i>
                Bater o Ponto
            </a>
        </div>
    </div>
</main>