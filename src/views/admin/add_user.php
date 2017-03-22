<?php require VIEW_ROOT . '/templates/header.php'; ?>

    <div class="container">
        <div class="col">
            <form action="" id="add-users">
                <div class="form-group row">
                    <label for="user-name" class="col-2 col-form-label">Imię:
                        <div class="col-10">
                            <input class="form-control" id="user-name" type="text">
                        </div>
                    </label>
                   
                </div>
                <div class="form-group row">
                    <label for="user-surname" class="col-2 col-form-label">Nazwisko:
                        <div class="col-10">
                        <input class="form-control" id="user-surname" type="text">
                        </div>
                    </label>
                </div>
                <div class="form-group row">
                    <label for="user-year" class="col-2 col-form-label">Rok studiów:
<div class="col-10">
                        <input class="form-control" id="user-year" type="text">
                        </div>
                    </label>
                </div>
                <input type="submit" class="btn btn-primary" value="Dodaj użytkownika">
            </form>
        </div>
    </div>

    <?php require VIEW_ROOT . '/templates/header.php'; ?>