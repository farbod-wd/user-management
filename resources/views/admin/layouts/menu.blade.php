 <!-- Menu -->
        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
              <span class="app-brand-logo demo">
                <svg width="26px" height="26px" viewbox="0 0 26 26" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <title>آیکن</title>
                  <defs>
                    <lineargradient x1="50%" y1="0%" x2="50%" y2="100%" id="linearGradient-1">
                      <stop stop-color="#5A8DEE" offset="0%"></stop>
                      <stop stop-color="#699AF9" offset="100%"></stop>
                    </lineargradient>
                    <lineargradient x1="0%" y1="0%" x2="100%" y2="100%" id="linearGradient-2">
                      <stop stop-color="#FDAC41" offset="0%"></stop>
                      <stop stop-color="#E38100" offset="100%"></stop>
                    </lineargradient>
                  </defs>
                  <g id="Pages" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Login---V2" transform="translate(-667.000000, -290.000000)">
                      <g id="Login" transform="translate(519.000000, 244.000000)">
                        <g id="Logo" transform="translate(148.000000, 42.000000)">
                          <g id="icon" transform="translate(0.000000, 4.000000)">
                            <path d="M13.8863636,4.72727273 C18.9447899,4.72727273 23.0454545,8.82793741 23.0454545,13.8863636 C23.0454545,18.9447899 18.9447899,23.0454545 13.8863636,23.0454545 C8.82793741,23.0454545 4.72727273,18.9447899 4.72727273,13.8863636 C4.72727273,13.5423509 4.74623858,13.2027679 4.78318172,12.8686032 L8.54810407,12.8689442 C8.48567157,13.19852 8.45300462,13.5386269 8.45300462,13.8863636 C8.45300462,16.887125 10.8856023,19.3197227 13.8863636,19.3197227 C16.887125,19.3197227 19.3197227,16.887125 19.3197227,13.8863636 C19.3197227,10.8856023 16.887125,8.45300462 13.8863636,8.45300462 C13.5386269,8.45300462 13.19852,8.48567157 12.8689442,8.54810407 L12.8686032,4.78318172 C13.2027679,4.74623858 13.5423509,4.72727273 13.8863636,4.72727273 Z" id="Combined-Shape" fill="#4880EA"></path>
                            <path d="M13.5909091,1.77272727 C20.4442608,1.77272727 26,7.19618701 26,13.8863636 C26,20.5765403 20.4442608,26 13.5909091,26 C6.73755742,26 1.18181818,20.5765403 1.18181818,13.8863636 C1.18181818,13.540626 1.19665566,13.1982714 1.22574292,12.8598734 L6.30410592,12.859962 C6.25499466,13.1951893 6.22958398,13.5378796 6.22958398,13.8863636 C6.22958398,17.8551125 9.52536149,21.0724191 13.5909091,21.0724191 C17.6564567,21.0724191 20.9522342,17.8551125 20.9522342,13.8863636 C20.9522342,9.91761479 17.6564567,6.70030817 13.5909091,6.70030817 C13.2336969,6.70030817 12.8824272,6.72514561 12.5388136,6.77314791 L12.5392575,1.81561642 C12.8859498,1.78721495 13.2366963,1.77272727 13.5909091,1.77272727 Z" id="Combined-Shape2" fill="url(#linearGradient-1)"></path>
                            <rect id="Rectangle" fill="url(#linearGradient-2)" x="0" y="0" width="7.68181818" height="7.68181818"></rect>
                          </g>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </span>
              <span class="app-brand-text demo menu-text fw-bold ms-2">فرست</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
              <i class="bx menu-toggle-icon d-none d-xl-block fs-4 align-middle"></i>
              <i class="bx bx-x d-block d-xl-none bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-divider mt-0"></div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboards -->
            <li class="menu-item active open">
              <a href="{{route('admin.index')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Dashboards">صفحه اصلی</div>
              </a>
            </li>

            <!-- Layouts -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">مدیریت کاربران</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="{{route('users.index')}}" class="menu-link">
                    <div data-i18n="Collapsed menu"> لیست کاربران</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="{{route('users.create')}}" class="menu-link">
                    <div data-i18n="Content navbar"> افزودن کاربر</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-check-shield"></i>
                <div data-i18n="Roles & Permissions">نقش‌ها و مجوزها</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="app-access-roles.html" class="menu-link">
                    <div data-i18n="Roles">نقش‌ها</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="app-access-permission.html" class="menu-link">
                    <div data-i18n="Permission">مجوزها</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Pages">صفحات</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="User Profile">پروفایل کاربر</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="pages-profile-user.html" class="menu-link">
                        <div data-i18n="Profile">پروفایل</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="pages-profile-teams.html" class="menu-link">
                        <div data-i18n="Teams">تیم‌ها</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="pages-profile-projects.html" class="menu-link">
                        <div data-i18n="Projects">پروژه‌ها</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="pages-profile-connections.html" class="menu-link">
                        <div data-i18n="Connections">اتصالات</div>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="Account Settings">تنظیمات حساب</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="pages-account-settings-account.html" class="menu-link">
                        <div data-i18n="Account">حساب</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="pages-account-settings-security.html" class="menu-link">
                        <div data-i18n="Security">امنیت</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="pages-account-settings-billing.html" class="menu-link">
                        <div data-i18n="Billing & Plans">صورتحساب و پلن‌ها</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="pages-account-settings-notifications.html" class="menu-link">
                        <div data-i18n="Notifications">اعلان‌ها</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="pages-account-settings-connections.html" class="menu-link">
                        <div data-i18n="Connections">اتصالات</div>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="menu-item">
                  <a href="pages-faq.html" class="menu-link">
                    <div data-i18n="FAQ">سوالات متداول</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="Help Center">مرکز راهنمایی</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="pages-help-center-landing.html" class="menu-link">
                        <div data-i18n="Landing">فرود</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="pages-help-center-categories.html" class="menu-link">
                        <div data-i18n="Categories">دسته‌بندی‌ها</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="pages-help-center-article.html" class="menu-link">
                        <div data-i18n="Article">مقاله</div>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="menu-item">
                  <a href="pages-pricing.html" class="menu-link">
                    <div data-i18n="Pricing">قیمت گذاری</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="Misc">متفرقه</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="pages-misc-error.html" class="menu-link" target="_blank">
                        <div data-i18n="Error">خطا</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="pages-misc-under-maintenance.html" class="menu-link" target="_blank">
                        <div data-i18n="Under Maintenance">در دست تعمیر</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="pages-misc-comingsoon.html" class="menu-link" target="_blank">
                        <div data-i18n="Coming Soon">به زودی</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="pages-misc-not-authorized.html" class="menu-link" target="_blank">
                        <div data-i18n="Not Authorized">غیر مجاز</div>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user-check"></i>
                <div data-i18n="Authentications">احراز هویت</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="Login">ورود</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="auth-login-basic.html" class="menu-link" target="_blank">
                        <div data-i18n="Basic">پایه</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-login-cover.html" class="menu-link" target="_blank">
                        <div data-i18n="Cover">کاور</div>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="Register">ثبت نام</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="auth-register-basic.html" class="menu-link" target="_blank">
                        <div data-i18n="Basic">پایه</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-register-cover.html" class="menu-link" target="_blank">
                        <div data-i18n="Cover">کاور</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-register-multisteps.html" class="menu-link" target="_blank">
                        <div data-i18n="Multi-steps">چند مرحله‌ای</div>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="Verify Email">تایید ایمیل</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="auth-verify-email-basic.html" class="menu-link" target="_blank">
                        <div data-i18n="Basic">پایه</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-verify-email-cover.html" class="menu-link" target="_blank">
                        <div data-i18n="Cover">کاور</div>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="Reset Password">بازنشانی رمز عبور</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="auth-reset-password-basic.html" class="menu-link" target="_blank">
                        <div data-i18n="Basic">پایه</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-reset-password-cover.html" class="menu-link" target="_blank">
                        <div data-i18n="Cover">کاور</div>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="Forgot Password">فراموشی رمز عبور</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="auth-forgot-password-basic.html" class="menu-link" target="_blank">
                        <div data-i18n="Basic">پایه</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-forgot-password-cover.html" class="menu-link" target="_blank">
                        <div data-i18n="Cover">کاور</div>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="Two Steps">دو مرحله‌ای</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="auth-two-steps-basic.html" class="menu-link" target="_blank">
                        <div data-i18n="Basic">پایه</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-two-steps-cover.html" class="menu-link" target="_blank">
                        <div data-i18n="Cover">کاور</div>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-spreadsheet"></i>
                <div data-i18n="Wizard Examples">نمونه‌های چند مرحله‌ای</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="wizard-ex-checkout.html" class="menu-link">
                    <div data-i18n="Checkout">پرداخت</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="wizard-ex-property-listing.html" class="menu-link">
                    <div data-i18n="Property Listing">لیست املاک</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="wizard-ex-create-deal.html" class="menu-link">
                    <div data-i18n="Create Deal">ایجاد معامله</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="modal-examples.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-window-open"></i>
                <div data-i18n="Modal Examples">نمونه‌های مودال</div>
              </a>
            </li>

            <!-- Components -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">اجزاء</span></li>
            <!-- Cards -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Cards">کارت‌ها</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="cards-basic.html" class="menu-link">
                    <div data-i18n="Basic">پایه</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="cards-advance.html" class="menu-link">
                    <div data-i18n="Advance">پیشرفته</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="cards-statistics.html" class="menu-link">
                    <div data-i18n="Statistics">آمار</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="cards-analytics.html" class="menu-link">
                    <div data-i18n="Analytics">تجزیه و تحلیل</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="cards-actions.html" class="menu-link">
                    <div data-i18n="Actions">عمل‌ها</div>
                  </a>
                </li>
              </ul>
            </li>
            <!-- User interface -->
            <li class="menu-item">
              <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-box"></i>
                <div data-i18n="User interface">رابط کاربری</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="ui-accordion.html" class="menu-link">
                    <div data-i18n="Accordion">باز و بسته شونده</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-alerts.html" class="menu-link">
                    <div data-i18n="Alerts">هشدارها</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-badges.html" class="menu-link">
                    <div data-i18n="Badges">نشان‌ها</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-buttons.html" class="menu-link">
                    <div data-i18n="Buttons">دکمه‌ها</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-carousel.html" class="menu-link">
                    <div data-i18n="Carousel">گردونه</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-collapse.html" class="menu-link">
                    <div data-i18n="Collapse">جمع کردن</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-dropdowns.html" class="menu-link">
                    <div data-i18n="Dropdowns">منوی کشویی</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-footer.html" class="menu-link">
                    <div data-i18n="Footer">فوتر</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-list-groups.html" class="menu-link">
                    <div data-i18n="List Groups">گروه‌های لیست</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-modals.html" class="menu-link">
                    <div data-i18n="Modals">مودال‌ها</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-navbar.html" class="menu-link">
                    <div data-i18n="Navbar">نوار ناوبری</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-offcanvas.html" class="menu-link">
                    <div data-i18n="Offcanvas">خارج از کادر</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-pagination-breadcrumbs.html" class="menu-link">
                    <div data-i18n="Pagination & Breadcrumbs">صفحه‌بندی و مسیرهای راهنما</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-progress.html" class="menu-link">
                    <div data-i18n="Progress">پیشرفت</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-spinners.html" class="menu-link">
                    <div data-i18n="Spinners">چرخنده‌ها</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-tabs-pills.html" class="menu-link">
                    <div data-i18n="Tabs & Pills">تب‌ها و سربرگ‌ها</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-toasts.html" class="menu-link">
                    <div data-i18n="Toasts">اعلان‌های Toast</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-tooltips-popovers.html" class="menu-link">
                    <div data-i18n="Tooltips & Popovers">تولتیپ‌ها و پاپ‌اورها</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-typography.html" class="menu-link">
                    <div data-i18n="Typography">تایپوگرافی</div>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Extended components -->
            <li class="menu-item">
              <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-copy"></i>
                <div data-i18n="Extended UI">رابط کاربری توسعه یافته</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="extended-ui-avatar.html" class="menu-link">
                    <div data-i18n="Avatar">آواتار</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="extended-ui-blockui.html" class="menu-link">
                    <div data-i18n="BlockUI">رابط کاربری بلوک</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="extended-ui-drag-and-drop.html" class="menu-link">
                    <div data-i18n="Drag & Drop">کشیدن و رها کردن</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="extended-ui-media-player.html" class="menu-link">
                    <div data-i18n="Media Player">پخش کننده رسانه</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="extended-ui-perfect-scrollbar.html" class="menu-link">
                    <div data-i18n="Perfect Scrollbar">نوار اسکرول Perfect</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="extended-ui-star-ratings.html" class="menu-link">
                    <div data-i18n="Star Ratings">امتیازدهی ستاره‌ای</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="extended-ui-sweetalert2.html" class="menu-link">
                    <div data-i18n="SweetAlert2">هشدارهای SweetAlert2</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="extended-ui-text-divider.html" class="menu-link">
                    <div data-i18n="Text Divider">جداکننده متن</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="Timeline">خط زمانی</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="extended-ui-timeline-basic.html" class="menu-link">
                        <div data-i18n="Basic">پایه</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="extended-ui-timeline-fullscreen.html" class="menu-link">
                        <div data-i18n="Fullscreen">تمام‌صفحه</div>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="menu-item">
                  <a href="extended-ui-tour.html" class="menu-link">
                    <div data-i18n="Tour">تور</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="extended-ui-treeview.html" class="menu-link">
                    <div data-i18n="Treeview">نمای درختی</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="extended-ui-misc.html" class="menu-link">
                    <div data-i18n="Miscellaneous">متفرقه</div>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Icons -->
            <li class="menu-item">
              <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-crown"></i>
                <div data-i18n="Icons">آیکن‌ها</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="icons-boxicons.html" class="menu-link">
                    <div data-i18n="Boxicons">آیکن‌های Boxicons</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="icons-font-awesome.html" class="menu-link">
                    <div data-i18n="Fontawesome">آیکن‌های FontAwesome</div>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Forms & Tables -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">فرم‌ها و جدول‌ها</span></li>
            <!-- Forms -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div data-i18n="Form Elements">المان‌های فرم</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="forms-basic-inputs.html" class="menu-link">
                    <div data-i18n="Basic Inputs">ورودی‌های پایه</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="forms-input-groups.html" class="menu-link">
                    <div data-i18n="Input groups">گروه‌های ورودی</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="forms-custom-options.html" class="menu-link">
                    <div data-i18n="Custom Options">گزینه‌های سفارشی</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="forms-editors.html" class="menu-link">
                    <div data-i18n="Editors">ویرایشگرها</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="forms-file-upload.html" class="menu-link">
                    <div data-i18n="File Upload">ارسال فایل</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="forms-pickers.html" class="menu-link">
                    <div data-i18n="Pickers">انتخاب‌گرها</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="forms-selects.html" class="menu-link">
                    <div data-i18n="Select & Tags">انتخاب و برچسب‌ها</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="forms-sliders.html" class="menu-link">
                    <div data-i18n="Sliders">اسلایدرها</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="forms-switches.html" class="menu-link">
                    <div data-i18n="Switches">سوئیچ‌ها</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="forms-extras.html" class="menu-link">
                    <div data-i18n="Extras">موارد بیشتر</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div data-i18n="Form Layouts">طرح‌های فرم</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="form-layouts-vertical.html" class="menu-link">
                    <div data-i18n="Vertical Form">فرم عمودی</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="form-layouts-horizontal.html" class="menu-link">
                    <div data-i18n="Horizontal Form">فرم افقی</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="form-layouts-sticky.html" class="menu-link">
                    <div data-i18n="Sticky Actions">عمل‌های چسبان</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-carousel"></i>
                <div data-i18n="Form Wizard">فرم مرحله‌ای</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="form-wizard-numbered.html" class="menu-link">
                    <div data-i18n="Numbered">شماره دار</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="form-wizard-icons.html" class="menu-link">
                    <div data-i18n="Icons">آیکن‌ها</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="form-validation.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-list-check"></i>
                <div data-i18n="Form Validation">اعتبارسنجی فرم</div>
              </a>
            </li>
            <!-- Tables -->
            <li class="menu-item">
              <a href="tables-basic.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-table"></i>
                <div data-i18n="Tables">جدول‌ها</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-grid"></i>
                <div data-i18n="Datatables">جدول‌های داده</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="tables-datatables-basic.html" class="menu-link">
                    <div data-i18n="Basic">پایه</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="tables-datatables-advanced.html" class="menu-link">
                    <div data-i18n="Advanced">پیشرفته</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="tables-datatables-extensions.html" class="menu-link">
                    <div data-i18n="Extensions">افزودنی‌ها</div>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Charts & Maps -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">نمودارها و نقشه‌ها</span></li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-chart"></i>
                <div data-i18n="Charts">نمودارها</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="charts-apex.html" class="menu-link">
                    <div data-i18n="Apex Charts">نمودارهای Apex</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="charts-chartjs.html" class="menu-link">
                    <div data-i18n="ChartJS">نمودارهای ChartJS</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="maps-leaflet.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-map-alt"></i>
                <div data-i18n="Leaflet Maps">نقشه‌های Leaflet</div>
              </a>
            </li>
          </ul>
        </aside>
        <!-- / Menu -->