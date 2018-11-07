<footer>

    <script src="/js/app.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <div class="container">

        <div class="row">

            <div class="col-lg-8 col-md-10 mx-auto">

                <h3>Archives</h3>
                <ul>
                    @foreach ($archives as $date)
                    <a class="link" href="/?month={{ $date->month}}&year={{$date->year}}">
                        <li>{{ $date->month }}, {{ $date->year }}</li>
                    </a>
                    @endforeach
                </ul>

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