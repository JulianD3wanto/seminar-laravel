<style>

    .sg-footer{
  background:
    radial-gradient(900px 380px at 10% 0%, rgba(37,99,235,.12), transparent 60%),
    radial-gradient(900px 380px at 90% 0%, rgba(99,102,241,.10), transparent 60%),
    #0b1220;
  color: rgba(255,255,255,.78);
  margin-top: 70px;
}

/* CTA BAR: rapihin tinggi + align */
.sg-footer-cta{
  background: rgba(255,255,255,.04);
  border: 1px solid rgba(255,255,255,.07);
  border-radius: 20px;
  padding: 18px 22px;
  transform: translateY(-34px);
  box-shadow: 0 18px 60px rgba(0,0,0,.25);
}

.sg-footer-cta .row{
  align-items: center;
}

.sg-cta-item{
  display:flex;
  gap:12px;
  align-items:center;
  justify-content:flex-start;
}

.sg-cta-ic{
  width: 46px;
  height: 46px;
  border-radius: 16px;
  background: rgba(37,99,235,.18);
  color:#fff;
  display:flex;
  align-items:center;
  justify-content:center;
  flex:0 0 auto;
}

.sg-cta-title{
  font-weight: 900;
  color:#fff;
  font-size: 14px;
  margin:0;
}
.sg-cta-sub{
  font-size: 13px;
  color: rgba(255,255,255,.72);
  margin:4px 0 0;
  line-height: 1.4;
}


/* MAIN AREA: jarak dan grid kolom lebih konsisten */
.sg-footer-main{
  padding: 0 0 34px;
}

.sg-footer-main .row{
  align-items: flex-start;
}

/* BRAND */
.sg-brand{
  display:flex;
  gap:12px;
  align-items:center;
  margin-bottom: 12px;
}

.sg-brand-badge{
  width: 52px;
  height: 52px;
  border-radius: 18px;
  background: #2563eb;
  color:#fff;
  display:flex;
  align-items:center;
  justify-content:center;
  font-weight: 900;
  letter-spacing: .5px;
  flex:0 0 auto;
}

.sg-brand-name{
  font-weight: 900;
  color:#fff;
  font-size: 18px;
  margin:0;
  line-height: 1.1;
}

.sg-brand-tagline{
  font-size: 12px;
  color: rgba(255,255,255,.65);
  margin-top: 2px;
}

.sg-footer-desc{
  font-size: 14px;
  color: rgba(255,255,255,.70);
  line-height: 1.8;
  margin: 12px 0 16px;
  max-width: 420px;
}

/* SOCIAL */
.sg-social{
  display:flex;
  gap:10px;
}
.sg-social-btn{
  width: 42px;
  height: 42px;
  border-radius: 14px;
  background: rgba(255,255,255,.06);
  border: 1px solid rgba(255,255,255,.08);
  color:#fff;
  display:flex;
  align-items:center;
  justify-content:center;
  text-decoration:none;
  transition: transform .15s ease, background .15s ease, border-color .15s ease;
}
.sg-social-btn:hover{
  transform: translateY(-2px);
  background: rgba(37,99,235,.18);
  border-color: rgba(37,99,235,.22);
  text-decoration:none;
}

/* TITLES */
.sg-footer-title{
  font-weight: 900;
  color:#fff;
  margin: 6px 0 14px;
  letter-spacing: -.01em;
}

/* LINKS: rapihin spacing */
.sg-links{
  list-style:none;
  padding-left:0;
  margin:0;
}
.sg-links li{
  margin-bottom: 10px;
}
.sg-links a{
  color: rgba(255,255,255,.72);
  text-decoration:none;
  font-weight: 700;
  display:inline-flex;
  gap:8px;
  align-items:center;
  transition: color .15s ease, transform .15s ease;
}
.sg-links a:hover{
  color:#fff;
  transform: translateX(2px);
  text-decoration:none;
}

/* SUBSCRIBE: input & button sejajar dan rapi */
.sg-subtext{
  color: rgba(255,255,255,.70);
  font-size: 14px;
  margin-bottom: 12px;
  line-height: 1.6;
}

.sg-subscribe{
  display:flex;
  gap:12px;
  align-items:center;
}

.sg-subscribe input{
  flex:1;
  height: 46px;
  border-radius: 16px;
  border: 1px solid rgba(255,255,255,.10);
  background: rgba(255,255,255,.06);
  padding: 0 14px;
  color:#fff;
  outline:none;
}

.sg-subscribe input::placeholder{
  color: rgba(255,255,255,.55);
}

.sg-subscribe button{
  width: 54px;
  height: 46px;
  border-radius: 16px;
  border: 0;
  background: #2563eb;
  color:#fff;
  box-shadow: 0 14px 30px rgba(37,99,235,.25);
  cursor:pointer;
  display:flex;
  align-items:center;
  justify-content:center;
}

.sg-subnote{
  display:block;
  margin-top: 10px;
  color: rgba(255,255,255,.55);
  line-height: 1.6;
}

/* BOTTOM: sejajarkan kiri kanan */
.sg-footer-bottom{
  border-top: 1px solid rgba(255,255,255,.08);
  padding: 16px 0;
}

.sg-copy{
  color: rgba(255,255,255,.65);
  font-size: 13px;
}

.sg-bottom-links{
  list-style:none;
  padding:0;
  margin:0;
  display:flex;
  gap:18px;
}

.sg-bottom-links a{
  color: rgba(255,255,255,.65);
  text-decoration:none;
  font-weight: 700;
  font-size: 13px;
}

.sg-bottom-links a:hover{
  color:#fff;
  text-decoration:none;
}

/* RESPONSIVE */
@media (max-width: 767.98px){
  .sg-footer{ margin-top: 40px; }
  .sg-footer-cta{ transform: translateY(-18px); padding: 16px; }
  .sg-cta-item{ justify-content:center; }
  .sg-footer-desc{ max-width: 100%; }
  .sg-bottom-links{ justify-content:center; flex-wrap:wrap; }
}

</style>

<footer class="sg-footer">
    <div class="container">
        {{-- TOP CTA --}}
        <div class="sg-footer-cta">
            <div class="row text-center text-md-left">
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="sg-cta-item">
                        <div class="sg-cta-ic"><i class="fas fa-map-marker-alt"></i></div>
                        <div>
                            <div class="sg-cta-title">Alamat</div>
                            <div class="sg-cta-sub">UNS Tower</div>
                        </div>
                    </div>
                </div>
                    
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="sg-cta-item">
                        <div class="sg-cta-ic"><i class="fas fa-phone"></i></div>
                        <div>
                            <div class="sg-cta-title">Telepon</div>
                            <div class="sg-cta-sub">+62 812-3456-7890</div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="sg-cta-item">
                        <div class="sg-cta-ic"><i class="far fa-envelope-open"></i></div>
                        <div>
                            <div class="sg-cta-title">Email</div>
                            <div class="sg-cta-sub">seminargo@info.com</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- MAIN --}}
        <div class="sg-footer-main">
            <div class="row">
                {{-- BRAND --}}
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="sg-brand">
                        <div class="sg-brand-badge">SG</div>
                        <div>
                            <div class="sg-brand-name">SeminarGO</div>
                            <div class="sg-brand-tagline">Platform seminar & webinar</div>
                        </div>
                    </div>

                    <p class="sg-footer-desc">
                        Selamat datang di SeminarGO, platform pendaftaran seminar dan webinar.
                        Temukan acara edukatif menarik untuk menambah insight, memperluas jaringan,
                        dan terhubung dengan para ahli.
                    </p>

                    <div class="sg-social">
                        <a href="#" class="sg-social-btn" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="sg-social-btn" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="sg-social-btn" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="sg-social-btn" aria-label="Youtube"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>

                {{-- LINKS --}}
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <div class="sg-footer-title">Quick Links</div>
                    <ul class="sg-links">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="/explore">Search Seminar</a></li>
                        <li><a href="#">Pusat Bantuan</a></li>
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    </ul>
                </div>

                {{-- SUBSCRIBE --}}
                <div class="col-lg-4 col-md-6">
                    <div class="sg-footer-title">Subscribe</div>
                    <p class="sg-subtext">Dapatkan info event terbaru langsung ke email kamu.</p>

                    <form action="#" class="sg-subscribe">
                        <input type="email" placeholder="Email address" required>
                        <button type="submit" aria-label="Subscribe">
                            <i class="fab fa-telegram-plane"></i>
                        </button>
                    </form>

                    <small class="sg-subnote">Dengan subscribe, kamu setuju menerima update dari SeminarGO.</small>
                </div>
            </div>
        </div>
    </div>

    {{-- BOTTOM --}}
    <div class="sg-footer-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="sg-copy">
                        Copyright &copy; 2026 SeminarGO. All rights reserved.
                    </div>
                </div>

                <div class="col-lg-6">
                    <ul class="sg-bottom-links justify-content-center justify-content-lg-end">
                        <li><a href="#">Terms</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Policy</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
