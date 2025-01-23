<ul class="grid-list-actions" style="list-style: none;display: flex;gap:2rem;padding-left: 0;margin-bottom: 0;">
  @foreach($default as $action)
    <li>{!! $action->render() !!}</li>
  @endforeach

  @if(!empty($custom))
    @foreach($custom as $action)
      <li>{!! $action->render() !!}</li>
    @endforeach
  @endif
</ul>

<script>
    $('.table-responsive').on('shown.bs.dropdown', function (e) {
        var t = $(this),
            m = $(e.target).find('.dropdown-menu'),
            tb = t.offset().top + t.height(),
            mb = m.offset().top + m.outerHeight(true),
            d = 20;
        if (t[0].scrollWidth > t.innerWidth()) {
            if (mb + d > tb) {
                t.css('padding-bottom', ((mb + d) - tb));
            }
        } else {
            t.css('overflow', 'visible');
        }
    }).on('hidden.bs.dropdown', function () {
        $(this).css({
            'padding-bottom': '',
            'overflow': ''
        });
    });
</script>

@yield('child')
