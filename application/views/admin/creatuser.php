
<div class="col col-sm-4 ">
    <h2 class="d-flex justify-content-center">Добавить ученика</h2>
    <form action="/admin/creatuser" method="post">
        <div class="md-form">
            <div class="md-form form-group mt-4">
                <input type="text" id="inputMDEx" class="form-control" name="name">
                <label for="inputMDEx">Имя</label>
            </div>
            <div class="md-form form-group mt-4">
                <input type="text" id="inputMDEx" class="form-control" name="firstname">
                <label for="inputMDEx">Фамилия</label>
            </div>
            <div class="md-form form-group mt-4">
                <input type="text" id="inputMDEx" class="form-control" name="patronymic">
                <label for="inputMDEx">Отчество</label>
            </div><div class="md-form form-group mt-4">
                <input type="date" id="inputMDEx" class="form-control" name="bday">
                <label for="inputMDEx">Дата рождения</label>
            </div>
            <div class="col d-flex justify-content-center"><button type="submit" class="btn btn-success btn-sm">Сохранить</button>
                <button type="submit" class="btn btn-danger btn-sm">Отменить</button></div>

        </div>
    </form>

</div>