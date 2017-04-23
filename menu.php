<script>
$(document).ready(function(){
   
       $("#btnArabic").click(function(){
        var loading = "<i class='fa fa-spin fa-refresh'></i>";
        $('#divBeranda').html(loading + " Memuat Daftar surah .... ");
        $('#divBeranda').load('berandaPage.php'); 
       });
       
});
</script>
<ul class="nav">
                    <li >
                      <a href="#">
                        <i class="fa fa-home">
                          <b class="bg-danger"></b>
                        </i>
                        <span>Beranda</span>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-plus-circle">
                          <b class="bg-warning"></b>
                        </i>
                        <span class="pull-right">
                          <i class="fa fa-angle-down text"></i>
                          <i class="fa fa-angle-up text-active"></i>
                        </span>
                        <span>Arabic Main</span>
                      </a>
                      <ul class="nav lt">
                        <li >
                          <a href="#"  id="btnArabic">                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>Arabic - English</span>
                          </a>
                        </li>
                        <li>
                          <a href="#">                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>Arabic - Indonesia</span>
                          </a>
                        </li>
                          <li>
                          <a href="#">                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>Arabic - English - Indonesia</span>
                          </a>
                        </li>
                      </ul>
                    </li>                    
                      
                      <li>
                      <a href="#">
                        <i class="fa fa-th">
                          <b class="bg-warning"></b>
                        </i>
                        <span class="pull-right">
                          <i class="fa fa-angle-down text"></i>
                          <i class="fa fa-angle-up text-active"></i>
                        </span>
                        <span>Self Translate</span>
                      </a>
                      <ul class="nav lt">
                        <li >
                          <a href="#" >                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>English</span>
                          </a>
                        </li>
                        <li>
                          <a href="#">                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>Indonesia</span>
                          </a>
                        </li>
                          
                      </ul>
                    </li>
                      
                      <li>
                      <a href="#">
                        <i class="fa fa-comments">
                          <b class="bg-warning"></b>
                        </i>
                        <span class="pull-right">
                          <i class="fa fa-angle-down text"></i>
                          <i class="fa fa-angle-up text-active"></i>
                        </span>
                        <span>Other Language</span>
                      </a>
                      <ul class="nav lt">
                        <li >
                          <a href="#" >                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>Germany</span>
                          </a>
                        </li>
                        <li>
                          <a href="#">                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>Japan</span>
                          </a>
                        </li>
                        <li>
                          <a href="#">                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>Spanyol</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                      
                  </ul>