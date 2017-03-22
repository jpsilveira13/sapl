<!-- **Menu Lateral** -->
<section id="secondary-left" class="secondary-sidebar secondary-has-left-sidebar">

    <aside class="widget widget_categories">
        <h4 class="widgettitle">CPL<br/> Central de Licitações</h4>
        <ul class="menulici">
            <li> <a data-id="" href="#">Página Inicial</a>  </li>
            @foreach($modalidadesLateral as $modalTopFive)
                <li> <a data-id="{{$modalTopFive->modalidade->first()->id}}" href="#">{{$modalTopFive->nome}}</a> </li>
            @endforeach

        </ul>
    </aside>
</section> <!-- **Fim Menu Lateral** -->