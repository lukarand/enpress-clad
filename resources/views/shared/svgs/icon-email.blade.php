@php
  $class = isset($class) ? $class : 'svg-icon';
@endphp
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="60" height="60" viewBox="0 0 60 60" class="{{ $class }}">
  <defs>
    <polygon id="icon---email-a" points="0 43 58 43 58 0 0 0"/>
  </defs>
  <g fill="none" fill-rule="evenodd">
    <polygon fill="#FFCCCD" points="7.5 45 2 50 57 50 51.5 45"/>
    <g transform="translate(1 9)">
      <polyline stroke="#EC2226" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" points="56.739 1.264 29 29.847 1.261 1.264"/>
      <path stroke="#EC2226" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M1.26086957 41.7347882L21.6869565 22.7642M36.3140522 22.7642L56.7401391 41.7347882"/>
      <mask id="icon---email-b" fill="#fff">
        <use xlink:href="#icon---email-a"/>
      </mask>
      <polygon stroke="#EC2226" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" points="1.261 41.735 56.739 41.735 56.739 1.265 1.261 1.265" mask="url(#icon---email-b)"/>
    </g>
  </g>
</svg>
