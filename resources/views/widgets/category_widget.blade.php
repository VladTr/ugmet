<div class="widget">
    {!! $categories !!}
</div>
<div>
    <h4>Калькулятор веса канатов</h4>
    <p>Выберите ГОСТ:
        <select name="" id="gost">
            <option value="7668">7668</option>
            <option value="2688">2688</option>
        </select>
    </p>
    <p>Введите диаметр каната: <input onkeyup="validate(this)" type="text" id="diam" ></p>
    <p>Введите длину каната: <input onkeyup="validate(this)" type="text" id="wireLength"></p>
    <button onclick="show()" class="btn-mysuccess">рассчитать вес</button>
    <div id="inputWeight"></div>
</div>
<script src="/js/calc.js"></script>