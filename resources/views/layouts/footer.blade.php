<footer>
    <div class="container">

        <div class="row">

            <div class="col-lg-8 col-md-10 mx-auto">

                @if (isset($archives))

                <h3>Archives</h3>
                <ul>
                    @foreach ($archives as $date)
                    <a class="link" href="/?month={{ $date->month}}&year={{$date->year}}">
                        <li>{{ $date->month }}, {{ $date->year }}</li>
                    </a>
                    @endforeach
                </ul>

                @endif

                <ul class="list-inline text-center">
                    <li class="list-inline-item">
                        <a href="https://instagram.com/vivekgawande" target="_blank">
                            <span class="fa-stack fa-lg">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.facebook.com/vivek040997" target="_blank">
                        <span class="fa-stack fa-lg">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                        </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://github.com/Vivek-abstract" target="_blank">
                        <span class="fa-stack fa-lg">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                        </span>
                        </a>
                    </li>
                </ul>
                <p class="copyright text-muted">Copyright &copy; Vivek Gawande {{ date("Y") }}</p>
            </div>
        </div>
    </div>
</footer>