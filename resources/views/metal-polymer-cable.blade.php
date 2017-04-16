@extends('main')

@section('head')


@section('content')
    <div>
        <div class="row">
               <div class="col-md-8">
                   <div class="my-text">
                       <h3>Трос металлополимерный</h3>
                       Трос металлополимерный состоит из латунированного металотроса и покрытия из пластиката ПВХ различных марок. Применение пластиката значительно повышает эксплуатационные характеристики троса, делая его невосприимчивым для агресивного воздействия внешней среды. Трос применяют для растяжки различных мачт и тентов, монтажа рекламных баннеров, систем ограждения и освещения, при прокладке воздушных линий и решения множества других задач. В зависимости от длины может поставляться в мотках или на пластмассовых катушках
                   </div>
                   <Table class="table table-responsive">
                       <TR >
                           <TD ><p align="center">Трос<br> металлополимерный</p></td>
                           <TD ><p align="center">Диметр троса,<br> мм</p></td>
                           <TD ><p align="center">Разрывное<br> усилие троса, кг</p></td>
                       </TR>
                       <tr >
                           <td ><p align="center">ПР-0.65</p></td>
                           <td ><p align="center">0,2 - 0,5</p></td>
                           <td ><p align="center">12</p></td>
                       </tr>
                       <tr >
                           <td ><p align="center">ПР-0.75</p></td>
                           <td ><p align="center">0,3 - 0,6</p></td>
                           <td ><p align="center">15</p></td>
                       </tr>
                       <tr >
                           <td ><p align="center">ПР-1.5</p></td>
                           <td ><p align="center">0,68 - 0,8</p></td>
                           <td ><p align="center">60</p></td>
                       </tr>
                       <tr >
                           <td ><p align="center"> ПР-2.0</p></td>
                           <td ><p align="center">0,67 - 1,2</p></td>
                           <td ><p align="center">80</p></td>
                       </tr>
                       <tr >
                           <td ><p align="center"> ПР-3.0</p></td>
                           <td ><p align="center">1,2 - 2,1</p></td>
                           <td ><p align="center">220</p></td>
                       </tr>
                       <tr >
                           <td ><p align="center"> ПР-4.0</p></td>
                           <td ><p align="center">2,0 - 3,1</p></td>
                           <td ><p align="center">470</p></td>
                       </tr>
                       <tr >
                           <td ><p align="center">ПР-5.0</p></td>
                           <td ><p align="center">2,85 - 4,0</p></td>
                           <td ><p align="center">825</p></td>
                       </tr>
                       <tr >
                           <td ><p align="center"> ПР-6.0</p></td>
                           <td ><p align="center">3,30 - 4,39</p></td>
                           <td ><p align="center">1050</p></td>
                       </tr>
                       <tr >
                           <td ><p align="center">ПР-7.0</p></td>
                           <td ><p align="center">3,85 - 5,70</p></td>
                           <td ><p align="center">1450</p></td>
                       </tr>
                       <tr >
                           <td ><p align="center"> ПР-8.0</p></td>
                           <td ><p align="center">4,00 - 6,10</p></td>
                           <td ><p align="center">1750</p></td>
                       </tr>
                       <tr >
                           <td ><p align="center"> ПР-10.0</p></td>
                           <td ><p align="center">5,10 - 9,0</p></td>
                           <td ><p align="center">2020</p></td>
                       </tr>
                       <tr >
                           <td ><p align="center"> ПР-12.0</p></td>
                           <td ><p align="center">9,00 - 10,60</p></td>
                           <td ><p align="center">4000</p></td>
                       </tr>
                   </table>
                   <h4>Выбор троса:</h4>
                   <form action="/order-post-light" method="post">
                       <div class="input-group">
                           <span class="input-group-addon" id="basic-addon1" >Тип троса</span>
                               <select name="type" id="gost">
                                   <option value="ПР-0.65">ПР-0.65</option>
                                   <option value="ПР-0.75">ПР-0.75</option>
                                   <option value="ПР-1.5">ПР-1.50</option>
                                   <option value="ПР-2.0">ПР-2.0</option>
                                   <option value="ПР-3.0">ПР-3.0</option>
                                   <option value="ПР-4.0">ПР-4.0</option>
                                   <option value="ПР-5.0">ПР-5.0</option>
                                   <option value="ПР-6.0">ПР-6.0</option>
                                   <option value="ПР-7.0">ПР-7.0</option>
                                   <option value="ПР-8.0">ПР-8.0</option>
                                   <option value="ПР-10.0">ПР-10.0</option>
                                   <option value="ПР-12.0">ПР-12.0</option>
                               </select>
                       </div>
                       <div class="input-group">
                           <span class="input-group-addon" id="basic-addon1">Длина троса, м</span>
                           <input pattern="[0-9]{,2}" name="len" type="text" class="form-control" aria-describedby="basic-addon1">
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
               <div class="col-md-4">
                   <img src="/img/mp.png" alt="Трос металлополимерный" class="img-responsive img-inside">

               </div>
        </div>
    </div>

@endsection

@section('sidebar')
    @parent
@endsection

@section('scripts')