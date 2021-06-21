<!-- Footer section -->
<footer class="footer-section">
    @foreach ($footer as $item)
        <h2>{{$item->phrase}} <a href="{{$item->lien}}" target="_blank">{{$item->motlien}}</a></h2>        
    @endforeach
</footer>
<!-- Footer section end -->