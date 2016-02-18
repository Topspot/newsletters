<li {!! (Request::is('admin/attorneys') || Request::is('admin/attorneys/create') || Request::is('admin/attorneys/*') ? 'class="active"' : '') !!}>
    <a href="#">
        <i class="livicon" data-name="list-ul" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
        <span class="title">Attorneys</span>
        <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">
        <li {!! (Request::is('admin/attorneys') ? 'class="active" id="active"' : '') !!}>
            <a href="{{ URL::to('admin/attorneys') }}">
                <i class="fa fa-angle-double-right"></i>
                Attorneys
            </a>
        </li>
        <li {!! (Request::is('admin/attorneys/create') ? 'class="active" id="active"' : '') !!}>
            <a href="{{ URL::to('admin/attorneys/create') }}">
                <i class="fa fa-angle-double-right"></i>
                Add New Attorney
            </a>
        </li>
    </ul>
</li><li {!! (Request::is('admin/articles') || Request::is('admin/articles/create') || Request::is('admin/articles/*') ? 'class="active"' : '') !!}>
    <a href="#">
        <i class="livicon" data-name="list-ul" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
        <span class="title">Articles</span>
        <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">
        <li {!! (Request::is('admin/articles') ? 'class="active" id="active"' : '') !!}>
            <a href="{{ URL::to('admin/articles') }}">
                <i class="fa fa-angle-double-right"></i>
                Articles
            </a>
        </li>
        <li {!! (Request::is('admin/articles/create') ? 'class="active" id="active"' : '') !!}>
            <a href="{{ URL::to('admin/articles/create') }}">
                <i class="fa fa-angle-double-right"></i>
                Add New Article
            </a>
        </li>
    </ul>
</li><li {!! (Request::is('admin/practiceareas') || Request::is('admin/practiceareas/create') || Request::is('admin/practiceareas/*') ? 'class="active"' : '') !!}>
    <a href="#">
        <i class="livicon" data-name="list-ul" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
        <span class="title"> Practice Area</span>
        <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">
        <li {!! (Request::is('admin/practiceareas') ? 'class="active" id="active"' : '') !!}>
            <a href="{{ URL::to('admin/practiceareas') }}">
                <i class="fa fa-angle-double-right"></i>
                Practice Area
            </a>
        </li>
        <li {!! (Request::is('admin/practiceareas/create') ? 'class="active" id="active"' : '') !!}>
            <a href="{{ URL::to('admin/practiceareas/create') }}">
                <i class="fa fa-angle-double-right"></i>
                Add New Practice Area
            </a>
        </li>
    </ul>
</li><li {!! (Request::is('admin/similars') || Request::is('admin/similars/create') || Request::is('admin/similars/*') ? 'class="active"' : '') !!}>
    <a href="{{ URL::to('admin/similars') }}">
        <i class="livicon" data-name="list-ul" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
        <span class="title">Similar Content</span>
        <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">
        <li {!! (Request::is('admin/similars') ? 'class="active" id="active"' : '') !!}>
            <a href="{{ URL::to('admin/similars') }}">
                <i class="fa fa-angle-double-right"></i>
                Similar Content
            </a>
        </li>
    </ul>
</li>