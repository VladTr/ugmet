@extends('main')

@section('head')


@section('content')
    <div>
        <div class="row">
               <div class="col-md-8">
                   <div class="my-text">
                       <h3>Канат стальной, трос стальной</h3>
                       ЮгМетал-Плюс предлагает стальные канаты, зачастую называющиеся тросами, которые изготовляются согласно ГОСТ, DIN EN (европейский стандарт) и стандартов ISO.
                       Канат (трос) стальной это достаточно сложное изделие, производящееся из черной или оцинкованной проволоки, различных диаметров и сердечника (канаты по некоторым ГОСТам выпускаются без сердечника)
                       Сердечник может быть изготовлен органическим (например пеньковым) или стальным. Канаты со стальным сердечником выдерживают большую нагрузку, в отличие от канатов такого же диаметра с органическим или полипропиленовым сердечником, но при этом они менее эластичные. Собственно, количество проволочек в пряди, а также количество прядей в канате, наличие и отсутствие сердечника и определяет конструкцию каната.
                       Если планируется использовать канат в условиях агрессивной внешней среды, стоит заказать канат с оцинкованным покрытием, в котором все пряди состоят из проволоки, подвергшейся процедуре оцинкования.
                       При выборе каната для различных грузоподъемных механизмов, машин: краны, кран-балки и др, рекомендуется применять канаты соответствующего ГОСТа и диаметра, которые указаны в технической документации на данное грузоподъемное средство. Если таких данных нет, необходимо ориентироваться на разрывное усилие выбранного каната, которое должно соответствовать нагрузке на него.
                       Конструкции наиболее распространенных видов канатов приведены ниже
                   </div>
                   <h4>Выбор каната:</h4>
                   <form action="/order-post-light" method="post">
                       <div class="input-group">
                           <span class="input-group-addon" id="basic-addon1" >ГОСТ</span>
                           <input required pattern="[0-9]{4}" name="gost" type="text" class="form-control" placeholder="2688/7688/..." aria-describedby="basic-addon1">
                       </div>
                       <div class="input-group">
                           <span class="input-group-addon" id="basic-addon1">Диаметр, мм</span>
                           <input required  name="diam" type="text" class="form-control" placeholder="8...50" aria-describedby="basic-addon1">
                       </div>
                       <div class="input-group">
                           <span class="input-group-addon" id="basic-addon1">Ваше имя </span>
                           <input required name="name" type="text" class="form-control"aria-describedby="basic-addon1">
                       </div>
                       <div class="input-group">
                           <span class="input-group-addon" id="basic-addon1">Ваш телефон</span>
                           <input required name="tel" type="text" class="form-control"  aria-describedby="basic-addon1">
                       </div>

                       <input type="hidden" name="_token" value="{{ csrf_token() }}">
                       <button class="btn btn-primary" type="submit">Заказать</button>
                   </form>
               </div>
               <div class="col-md-4">
                   <table>
                       <tr>
                           <td align="center"><img class="img-responsive" src="/img/7668.png" alt="Канат" ><p>ГОСТ 7668</p></td>
                           <td align="center"><img class="img-responsive" src="/img/2688.png" alt="Канат" ><p>ГОСТ 2688</p></td>
                       </tr>
                       <tr>
                           <td align="center"><img class="img-responsive" src="/img/3077.png" alt="Канат"><p>ГОСТ 3077</p></td>
                           <td align="center"><img class="img-responsive" src="/img/2408.png" alt="Канат"><p>ISO 2408</p></td>
                       </tr>
                       <tr>
                           <td align="center"><img class="img-responsive" src="/img/7669.png" alt="Канат" ><p>ГОСТ 7669</p></td>
                           <td align="center"><img class="img-responsive" src="/img/3066.png" alt="Канат" ><p>ГОСТ 3066</p></td>
                       </tr>
                   </table>

               </div>
        </div>
    </div>

@endsection

@section('sidebar')
    @parent
@endsection

@section('scripts')