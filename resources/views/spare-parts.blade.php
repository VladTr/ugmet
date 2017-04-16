@extends('main')

@section('head')


@section('content')
    <div>
        <div class="row">
               <div class="col-md-12">
                   <div class="my-text">
                       <h3>Комплектующие</h3>
                       Для обеспечение работы с канатно-стропальной продукцией и оснащения различных грузоподъемных устройств элементами креплений используются различные виды комплектующих или такелажа Правильный выбор такелажа, с точки зрения, конструкции, нагрузки и условий применения, обеспечит надежную работу грузоподъемным механизмам.
                   </div>
                   <br>
                   <table class="table table-responsive">
                       <TR >
                           <TD ><p align="center">Наименование</p></td>
                           <TD ><p align="center">Характеристики</p></td>
                           <TD ><p align="center">Применение</p></td>
                       </TR>
                       <tr >
                           <td ><p align="center"><img src="/img/talrep.png" alt="Талреп" class="img-responsive"></br>Талреп</p></td>
                           <td ><p align="center">Рабочая нагрузка от 50 кг. до 2200 кг. </p></td>
                           <td ><p align="center">Служит для стягивания кантов и состоит из двух винтов с противоположной резьбой и применяется во всех видах строительных и такелажных работ</p></td>
                       </tr>
                       <tr >
                           <td ><p align="center"><img src="/img/zazhim.png" alt="Зажим" class="img-responsive spare-parts"></br>Зажим для каната</p></td>
                           <td ><p align="center">Диаметр от 4 мм. до 30 мм. </p></td>
                           <td ><p align="center">Используются для закрепления и фиксации тросов при проведении строительных и грузоподъемных работ</p></td>
                       <tr >
                           <td ><p align="center"><img src="/img/kruk.png" alt="Крюк" class="img-responsive spare-parts" ></br>Крюк чалочный</p></td>
                           <td ><p align="center">Грузоподъемность от 0,75 тн. до 22 тн. </p></td>
                           <td ><p align="center">Применяется для изготовления стропов и служит для обеспечения захвата и перемещения различных грузов</p></td>
                       </tr>
                       <tr >
                           <td ><p align="center"><img src="/img/koush.png" alt="Коуш" class="img-responsive spare-parts"></br>Коуш</p></td>
                           <td ><p align="center">Диаметр под канат от 3 мм. до 48 мм. </p></td>
                           <td ><p align="center">Используется в производствеканатных стропов и служит для предохранения канатов от износа и перетирания</p></td>
                       </tr>
                       <tr >
                           <td ><p align="center"><img src="/img/skoba.png" alt="Скоба" class="img-responsive spare-parts" ></br>Скоба такелажная</p></td>
                           <td ><p align="center">Грузоподъемность от 0,5 тн. до 85 тн. </p></td>
                           <td ><p align="center">Используется для подъема и перемещения грузов в качестве вспомогательного элемента</p></td>
                       </tr>

                   </table>
                   <h4>Выбор элемента крепежа:</h4>
                   <form action="/order-post-light" method="post">
                       <div class="input-group">
                           <span class="input-group-addon" id="basic-addon1" >Тип элемента</span>
                               <select name="typeCompl" id="spareSelect" >
                                   <option value="Талреп">Талреп</option>
                                   <option value="Зажим">Зажим</option>
                                   <option value="Крюк">Крюк</option>
                                   <option value="Коуш">Коуш</option>
                                   <option value="Скоба">Скоба</option>
                               </select>
                       </div>
                       <div class="input-group">
                           <span class="input-group-addon" id="basic-addon1">Характеристики</span>
                           <input pattern="[0-9]{,2}" name="params" type="text" class="form-control" aria-describedby="basic-addon1">
                       </div>
                       <div class="input-group">
                           <span class="input-group-addon" id="basic-addon1">Ваше имя </span>
                           <input name="name" type="text" class="form-control"aria-describedby="basic-addon1">
                       </div>
                       <div class="input-group">
                           <span class="input-group-addon" id="basic-addon1">Ваш телефон</span>
                           <input  pattern="[0-9]{,10}" name="tel" type="text" class="form-control"  aria-describedby="basic-addon1">
                       </div>
                       <input type="hidden" name="_token" value="{{ csrf_token() }}">
                       <button class="btn btn-primary" type="submit">Заказать</button>
                   </form>
               </div>
        </div>
    </div>

@endsection

@section('sidebar')
    @parent
@endsection

@section('scripts')