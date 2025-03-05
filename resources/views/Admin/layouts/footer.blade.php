<!-- search modal -->


<style>
    footer {
            text-align: center;
            padding: 20px;
            background-color: #333 !important;
            color: #fff;
        }

        .footer .social-icons a {
            margin: 0 10px;
            color: #fff;
            text-decoration: none;
        }

        .footer .footer-text {
            margin: 0;
        }

        .client_list {
            text-align: end;
            max-width: 85%;
            margin-top: 1rem;
            margin-bottom: 0.5rem;
        }

        @media (max-width: 600px) {
            .container {
                padding: 20px;
            }

            .form-group input {
                width: calc(100% - 18px);
            }

            .submit-button button {
                width: 100%;
                padding: 12px;
            }
            p.footer-text {
    font-size: 14px;
}
        }

</style>
<div class="modal" id="SearchModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-fullscreen-md-down">
        <div class="modal-content">
            <div class="modal-header gap-2">
                <div class="position-relative popup-search w-100">
                    <input class="form-control form-control-lg ps-5 border border-3 border-primary" type="search"
                        placeholder="Search">
                    <span class="position-absolute top-50 search-show ms-3 translate-middle-y start-0 top-50 fs-4"><i
                            class='bx bx-search'></i></span>
                </div>
                <button type="button" class="btn-close d-md-none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="search-list">
                    <p class="mb-1">Html Templates</p>
                    <div class="list-group">
                        <a href="javascript:;"
                            class="list-group-item list-group-item-action active align-items-center d-flex gap-2 py-1"><i
                                class='bx bxl-angular fs-4'></i>Best Html Templates</a>
                        <a href="javascript:;"
                            class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i
                                class='bx bxl-vuejs fs-4'></i>Html5 Templates</a>
                        <a href="javascript:;"
                            class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i
                                class='bx bxl-magento fs-4'></i>Responsive Html5 Templates</a>
                        <a href="javascript:;"
                            class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i
                                class='bx bxl-shopify fs-4'></i>eCommerce Html Templates</a>
                    </div>
                    <p class="mb-1 mt-3">Web Designe Company</p>
                    <div class="list-group">
                        <a href="javascript:;"
                            class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i
                                class='bx bxl-windows fs-4'></i>Best Html Templates</a>
                        <a href="javascript:;"
                            class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i
                                class='bx bxl-dropbox fs-4'></i>Html5 Templates</a>
                        <a href="javascript:;"
                            class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i
                                class='bx bxl-opera fs-4'></i>Responsive Html5 Templates</a>
                        <a href="javascript:;"
                            class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i
                                class='bx bxl-wordpress fs-4'></i>eCommerce Html Templates</a>
                    </div>
                    <p class="mb-1 mt-3">Software Development</p>
                    <div class="list-group">
                        <a href="javascript:;"
                            class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i
                                class='bx bxl-mailchimp fs-4'></i>Best Html Templates</a>
                        <a href="javascript:;"
                            class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i
                                class='bx bxl-zoom fs-4'></i>Html5 Templates</a>
                        <a href="javascript:;"
                            class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i
                                class='bx bxl-sass fs-4'></i>Responsive Html5 Templates</a>
                        <a href="javascript:;"
                            class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i
                                class='bx bxl-vk fs-4'></i>eCommerce Html Templates</a>
                    </div>
                    <p class="mb-1 mt-3">Online Shoping Portals</p>
                    <div class="list-group">
                        <a href="javascript:;"
                            class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i
                                class='bx bxl-slack fs-4'></i>Best Html Templates</a>
                        <a href="javascript:;"
                            class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i
                                class='bx bxl-skype fs-4'></i>Html5 Templates</a>
                        <a href="javascript:;"
                            class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i
                                class='bx bxl-twitter fs-4'></i>Responsive Html5 Templates</a>
                        <a href="javascript:;"
                            class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i
                                class='bx bxl-vimeo fs-4'></i>eCommerce Html Templates</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end search modal -->

<!--start switcher-->
{{-- <div class="switcher-wrapper">
    <div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
    </div>
    <div class="switcher-body">
        <div class="d-flex align-items-center">
            <h5 class="mb-0 text-uppercase">Theme Customizer</h5>
            <button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
        </div>
        <hr />
        <h6 class="mb-0">Theme Styles</h6>
        <hr />
        <div class="d-flex align-items-center justify-content-between">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="lightmode" checked>
                <label class="form-check-label" for="lightmode">Light</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="darkmode">
                <label class="form-check-label" for="darkmode">Dark</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="semidark">
                <label class="form-check-label" for="semidark">Semi Dark</label>
            </div>
        </div>
        <hr />
        <div class="form-check">
            <input class="form-check-input" type="radio" id="minimaltheme" name="flexRadioDefault">
            <label class="form-check-label" for="minimaltheme">Minimal Theme</label>
        </div>
        <hr />
        <h6 class="mb-0">Header Colors</h6>
        <hr />
        <div class="header-colors-indigators">
            <div class="row row-cols-auto g-3">
                <div class="col">
                    <div class="indigator headercolor1" id="headercolor1"></div>
                </div>
                <div class="col">
                    <div class="indigator headercolor2" id="headercolor2"></div>
                </div>
                <div class="col">
                    <div class="indigator headercolor3" id="headercolor3"></div>
                </div>
                <div class="col">
                    <div class="indigator headercolor4" id="headercolor4"></div>
                </div>
                <div class="col">
                    <div class="indigator headercolor5" id="headercolor5"></div>
                </div>
                <div class="col">
                    <div class="indigator headercolor6" id="headercolor6"></div>
                </div>
                <div class="col">
                    <div class="indigator headercolor7" id="headercolor7"></div>
                </div>
                <div class="col">
                    <div class="indigator headercolor8" id="headercolor8"></div>
                </div>
            </div>
        </div>
        <hr />
        <h6 class="mb-0">Sidebar Colors</h6>
        <hr />
        <div class="header-colors-indigators">
            <div class="row row-cols-auto g-3">
                <div class="col">
                    <div class="indigator sidebarcolor1" id="sidebarcolor1"></div>
                </div>
                <div class="col">
                    <div class="indigator sidebarcolor2" id="sidebarcolor2"></div>
                </div>
                <div class="col">
                    <div class="indigator sidebarcolor3" id="sidebarcolor3"></div>
                </div>
                <div class="col">
                    <div class="indigator sidebarcolor4" id="sidebarcolor4"></div>
                </div>
                <div class="col">
                    <div class="indigator sidebarcolor5" id="sidebarcolor5"></div>
                </div>
                <div class="col">
                    <div class="indigator sidebarcolor6" id="sidebarcolor6"></div>
                </div>
                <div class="col">
                    <div class="indigator sidebarcolor7" id="sidebarcolor7"></div>
                </div>
                <div class="col">
                    <div class="indigator sidebarcolor8" id="sidebarcolor8"></div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<footer class="page-footer">

    <div class="footer-content">
        {{-- <div class="social-icons">
                    <a href="https://www.facebook.com/cxrana" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://twitter.com/cxrana" class="social-icon"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/ahrana/" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                </div> --}}
        <p class="footer-text" style="">
            Designed by <i class="fas fa-heart" style="color: red"></i>
            <a id="footer-link" href="https://snmtechcraftinnovation.com/" target="_blank"
                style="text-decoration: none; color: inherit;">SNM Techcraft Innovation</a>
        </p>


    </div>
</footer>

<!--end switcher-->
<!-- Bootstrap JS -->
<script src="{{ url('admin_assets/assets/js/bootstrap.bundle.min.js') }}"></script>
<!--plugins-->
<script src="{{ url('admin_assets/assets/js/jquery.min.js') }}"></script>
<script src="{{ url('admin_assets/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
<script src="{{ url('admin_assets/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
<script src="{{ url('admin_assets/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
<script src="{{ url('admin_assets/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
<script src="{{ url('admin_assets/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src="{{ url('admin_assets/assets/plugins/chartjs/js/chart.js') }}"></script>
<script src="{{ url('admin_assets/assets/js/index.js') }}"></script>
<script src="{{ url('admin_assets/assets/plugins/validation/jquery.validate.min.js') }}"></script>
<script src="{{ url('admin_assets/assets/plugins/validation/validation-script.js') }}"></script>

<script src="{{ url('admin_assets/assets/plugins/fancy-file-uploader/jquery.fileupload.js') }}"></script>
<script src="{{ url('admin_assets/assets/plugins/fancy-file-uploader/jquery.iframe-transport.js') }}"></script>
<script src="{{ url('admin_assets/assets/plugins/fancy-file-uploader/jquery.fancy-fileupload.js') }}"></script>


<script src="{{ url('admin_assets/assets/plugins/Drag-And-Drop/dist/imageuploadify.min.js') }}"></script>
<script>
    $('#fancy-file-upload').FancyFileUpload({
        params: {
            action: 'fileuploader'
        },
        maxfilesize: 30000000
    });
</script>
<script>
    $(document).ready(function() {
        $('#image-uploadify').imageuploadify();
    })
</script>
<script>
    $(document).ready(function() {
        $('#shirtdesign').change(function(event) {
            var fileName = event.target.files[0].name;
            //    alert(fileName);
            $('#shirtdesignvalue').val(fileName);
            console.log(fileName);
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#pantdesign').change(function(event) {
            var fileName = event.target.files[0].name;
            //    alert(fileName);
            $('#pantdesignvalue').val(fileName);
            console.log(fileName);
        });
    });
</script>
<!--app JS-->
<script src="{{ url('admin_assets/assets/js/app.js') }}"></script>
<script>
    new PerfectScrollbar(".app-container")
</script>
<script src="admin_assets/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="admin_assets/assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
<script>
    $(document).ready(function() {
        var table = $('#example2').DataTable({
            lengthChange: false,
            buttons: ['copy', 'excel', 'pdf', 'print']
        });

        table.buttons().container()
            .appendTo('#example2_wrapper .col-md-6:eq(0)');
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script>
    $(document).ready(function() {
        $('.summernote').summernote({
            placeholder: 'Enter your Description here...',
            height: 600,
            callbacks: {
                // Custom callback to sanitize content before paste
                onPaste: function(e) {
                    var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData)
                        .getData('text/html');
                    e.preventDefault();
                    var cleanText = bufferText.replace(/<\/?[^>]+(>|$)/g, "");
                    document.execCommand('insertHtml', false, cleanText);
                }
            }
        });
    });

    // Get the link element
    const link = document.getElementById('footer-link');

    // Add mouseover event listener
    link.addEventListener('mouseover', function() {
        this.style.color = '#0056b3'; // Change color on hover
        this.style.transform = 'scale(1.1)'; // Slightly enlarge the text
        this.style.transition = 'color 0.2s ease, transform 0.2s ease'; // Smooth transition
    });

    // Add mouseout event listener
    link.addEventListener('mouseout', function() {
        this.style.color = 'inherit'; // Revert color
        this.style.transform = 'scale(1)'; // Revert size
    });
</script>
</body>


<!-- Mirrored from codervent.com/rocker/demo/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Apr 2023 09:07:46 GMT -->

</html>
