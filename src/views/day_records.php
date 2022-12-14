<main class="content">
    <?php
        renderTitle(
            'Registrar Ponto',
            'Mantenha seu ponto consistente!',
            'icofont-check-alt'
        );
        include(TEMPLATE_PATH . "/messages.php");
    ?>
    <div class="card">
        <div class="card-header">
            <h3><?= $today ?></h3>
            <p class="mb-0">Os batimentos efetuados hoje</p>
        </div>
        <div class="card-body">
            <div class="m-5 d-flex justify-content-around text-center">
                <span class="record"><?= $workingHours->time1 ?? '----' ?>
                    <h6 class="text-secondary font-weight-light text-uppercase">
                        <i class="text-secondary icofont-clock-time m-1"></i>
                        Inicio do expediente</h6></span>
                <span class="record"><?= $workingHours->time2 ?? '----' ?>
                    <h6 class="text-secondary font-weight-light text-uppercase"><i
                                class="text-secondary icofont-clock-time m-1"></i>Saída para refeição</h6></span>
            </div>
            <div class="m-5 d-flex justify-content-around text-center">
                <span class="record"><?= $workingHours->time3 ?? '----' ?>
                    <h6 class="text-secondary font-weight-light text-uppercase"><i
                                class="text-secondary icofont-clock-time m-1"></i>Retorno da refeição</h6></span>
                <span class="record"><?= $workingHours->time4 ?? '----' ?><h6
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

    <form class="mt-5" action="innout.php" method="post">
        <div class="input-group no-border">
            <input type="text" name="forcedTime" class="form-control"
                placeholder="Informe a hora para simular o batimento">
            <button class="btn btn-danger ml-3">
                Simular Ponto
            </button>
        </div>
    </form>

</main>