<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>
    @isset($doctitle)
    {{$doctitle}} | IkiSkanaus
    @else
    IkiSkanaus
    @endisset
    </title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@300&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
</head>

<body>
  {{-- Header --}}
  <x-header.header />
  {{-- Main content --}}
  <main>
    {{$slot}}
  </main>
  {{-- Footer --}}
  <x-footer.footer />

  {{-- Scripts --}}

  {{-- Header for mobile functional logic --}}
  <script>
    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuButton = document.querySelector('.mobile-menu-button');
        const mobileMenu = document.querySelector('.mobile-menu');

        mobileMenuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });
    });
</script>

{{-- Shopping cart functional logic --}}
<script type="text/javascript">
// Update cart/change value
$(".cart_update").change(function(e) {
  e.preventDefault();

  var ele = $(this);

  $.ajax({
    url: '{{ route('update_cart')}}',
    method: "patch",
    data: {
      _token: '{{ csrf_token() }}',
      id: ele.parents("tr").attr("data-id"),
      quantity: ele.parents("tr").find(".quantity").val()
    },
    success: function (response) 
    {
      window.location.reload();
    }
  });
});

// Remove from cart
$(".cart_remove").click(function (e) 
{
  e.preventDefault();
  var ele = $(this);
  if(confirm("Ar tikrai norite pašalinti?"))
  {
    $.ajax({
      url: '{{ route('remove_from_cart')}}',
      method: "DELETE",
      data: {
        _token: '{{csrf_token() }}',
        id: ele.parents("tr").attr("data-id")
      },
      success: function(response) {
        window.location.reload();
      }
    })
  }
});
</script>

{{-- Header shopping cart functional show/hide logic --}}
<script>
  const cartButton = document.getElementById('cart-button');
  const cartDropdown = document.getElementById('cart-dropdown');

  let isDropdownVisible = false;

  // Onclick
  cartButton.addEventListener('click', (event) => {
      event.stopPropagation();
      isDropdownVisible = !isDropdownVisible;
      cartDropdown.classList.toggle('hidden', !isDropdownVisible);
  });

  // Hide after clicking other block
  document.addEventListener('click', (event) => {
      if (!event.target.closest('#cart-button') && !event.target.closest('#cart-dropdown')) {
          isDropdownVisible = false;
          cartDropdown.classList.add('hidden');
      }
  });
</script>
</body>
</html>