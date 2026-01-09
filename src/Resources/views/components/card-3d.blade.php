{{-- resources/views/components/card-3d.blade.php --}}
@props([
  /**
   * Image source URL
   * @var string|null $imgSrc Image 來源網址
   */
  'imgSrc' => 'https://img.daisyui.com/images/stock/creditcard.webp',
])
<div class="hover-3d">
  <!-- content -->
  <figure class="max-w-100 rounded-2xl">
    <img src="{{ $imgSrc }}" alt="3D card" />
  </figure>
  <!-- 8 empty divs needed for the 3D effect -->
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
</div>