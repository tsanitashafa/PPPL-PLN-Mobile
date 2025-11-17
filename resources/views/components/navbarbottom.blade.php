<style>
.bottom-nav-container { position: fixed; bottom: 0; width: 100%; background: #fff; border-top: 1px solid #eaeaea; padding: 6px 0 10px; display: flex; justify-content: space-around; z-index: 100; }
.nav-item { text-align: center; color: #9AA0A6; font-size: 12px; }
.nav-item img { width: 22px; height: 22px; margin-bottom: 3px; opacity: 0.7; }
.nav-item.active { color: #005FFF; font-weight: 600; }
.nav-item.active img { opacity: 1; }
.scan-button { position: relative; top: -20px; background: #005FFF; width: 62px; height: 62px; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 10px rgba(0,0,0,0.18); }
.scan-button img { width: 32px; height: 32px; filter: brightness(100); }
</style>
<div class="bottom-nav-container">
<a href="/homepage" class="nav-item {{ $active == 'home' ? 'active' : '' }}">
<img src="/images/icon-home.png"><div>Home</div>
</a>
<a href="/riwayat" class="nav-item {{ $active == 'riwayat' ? 'active' : '' }}">
<img src="/images/icon-history.png"><div>Riwayat</div>
</a>
<a href="/scan" class="scan-button">
<img src="/images/icon-scan.png">
</a>
<a href="/artikel" class="nav-item {{ $active == 'artikel' ? 'active' : '' }}">
<img src="/images/icon-article.png"><div>Artikel</div>
</a>
<a href="/profil" class="nav-item {{ $active == 'profil' ? 'active' : '' }}">
<img src="/images/icon-profile.png"><div>Profil</div>
</a>
</div>