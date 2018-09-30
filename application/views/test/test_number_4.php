<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-brand" href="../user/profile"> Кадровая безопасность</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"> </i><?php echo $_SESSION['user_fio']; ?> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> Профиль</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Настройки</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="logout"><i class="fa fa-sign-out fa-fw"></i> Выход</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li>
                        <a href="../user/profile"><i class="fa fa-home fa-fw"></i> Главная страница</a>
                    </li>
                    <li>
                        <a href="../user/result"><i class="fa fa-bookmark fa-fw"></i> Результаты </a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-table fa-fw"></i> Анкетирование<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="../user/questionnaire"> Базовая информация</a>
                            </li>
                            <li>
                                <a href="../user/education"> Информация об образовании</a>
                            </li>
                            <li>
                                <a href="../user/contactinfo"> Контактная информация</a>
                            </li>
                            <li>
                                <a href="../user/drivinglicense"> Водительское удостоверения</a>
                            </li>
                            <li>
                                <a href="../user/military"> Отношение к воинской обязанности</a>
                            </li>
                            <li>
                                <a href="../user/languages"> Знание иностранных языков</a>
                            </li>
                            <li>
                                <a href="../user/academicdegree"> Учёная степень</a>
                            </li>
                            <li>
                                <a href="../user/experience"> Стаж работы</a>
                            </li>
                            <li>
                                <a href="../user/anexperience"> Опыт работы</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="../test/test_1" class="active"><i class="fa fa-edit fa-fw"></i> Доступные тесты</a>
                    </li>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-8">
                <h1 class="page-header"> Доступный тест №4</h1>
            </div>
            <div class="col-lg-4">
            	<ol class="breadcrumb page-header" style="float: right; ">
			        <li><a href="../user/index"><i class="fa fa-dashboard"></i> Главная страница</a></li>
			        <li>Доступные тесты</li>
			    </ol>
			</div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

        <?php if(isset($_SESSION['success'])) {?>

        <div class="alert alert-success"><?php echo $_SESSION['success']?> </div>

        <?php }?>
		<form method="post" style="padding-bottom: 25px;">
			<h4 style="text-indent: 25px;">
			    Вам предлагается список слов из 30 блоков, по 3 слова в каждом блоке. В
                каждом блоке выберите только одно из трех слов, которое наиболее точно Вас характеризует, и выберите его.
            </h4>
			<div class="box-body">  
							<div class="form-group">
								<label>Инструкция: Вам предлагается список слов из 30 блоков, по 3 слова в каждом блоке. В каждом блоке выберите только одно из трех слов, которое наиболее точно Вас характеризует, и выберите его.</label>
							</div>
							<div class="form-group">
								<label>1 блок</label>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios1" value="смелый" required>
								  смелый
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios1" value="бдительный" required>
								  бдительный
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios1" value="предприимчивый" required>
								  предприимчивый
								</label>
							  </div>
							</div>
							<div class="form-group">
								<label>2 блок</label>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios2" value="кроткий" required>
								  кроткий
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios2" value="робкий" required>
								  робкий
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios2" value="упрямый" required>
								  упрямый
								</label>
							  </div>
							</div>
							<div class="form-group">
								<label>3 блок</label>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios3" value="осторожный" required>
								  осторожный
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios3" value="решительный" required>
								  решительный
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios3" value="пессимистичный" required>
								  пессимистичный
								</label>
							  </div>
							</div>
							<div class="form-group">
								<label>4 блок</label>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios4" value="непостоянный" required>
								  непостоянный
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios4" value="бесцеремонный" required>
								  бесцеремонный
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios4" value="внимательный" required>
								  внимательный
								</label>
							  </div>
							</div>
							<div class="form-group">
								<label>5 блок</label>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios5" value="неумный" required>
								  неумный
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios5" value="трусливый" required>
								  трусливый
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios5" value="не думающий" required>
								  не думающий
								</label>
							  </div>
							</div>
							<div class="form-group">
								<label>6 блок</label>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios6" value="ловкий" required>
								  ловкий
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios6" value="бойкий" required>
								  бойкий
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios6" value="предусмотрительный" required>
								  предусмотрительный
								</label>
							  </div>
							</div>
							<div class="form-group">
								<label>7 блок</label>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios7" value="хладнокровный" required>
								  хладнокровный
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios7" value="колеблющийся" required>
								  колеблющийся
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios7" value="удалой" required>
								  удалой
								</label>
							  </div>
							</div>
							<div class="form-group">
								<label>8 блок</label>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios8" value="стремительный" required>
								  стремительный
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios8" value="легкомысленный" required>
								  легкомысленный
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios8" value="боязливый" required>
								  боязливый
								</label>
							  </div>
							</div>
							<div class="form-group">
								<label>9 блок</label>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios9" value="не задумывающийся" required>
								  незадумывающийся
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios9" value="жеманный" required>
								  жеманный
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios9" value="непредусмотрительный" required>
								  непредусмотрительный
								</label>
							  </div>
							</div>
							<div class="form-group">
								<label>10 блок</label>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios10" value="оптимистичный" required>
								  оптимистичный
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios10" value="добросовестный" required>
								  добросовестный
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios10" value="чуткий" required>
								  чуткий
								</label>
							  </div>
							</div>
							<div class="form-group">
								<label>11 блок</label>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios11" value="меланхоличный" required>
								  меланхоличный
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios11" value="сомневающийся" required>
								  сомневающийся
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios11" value="неустойчивый" required>
								  неустойчивый
								</label>
							  </div>
							</div>
							<div class="form-group">
								<label>12 блок</label>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios12" value="трусливый" required>
								  трусливый
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios12" value="небрежный" required>
								  небрежный
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios12" value="взволнованный" required>
								  взволнованный
								</label>
							  </div>
							</div>
							<div class="form-group">
								<label>13 блок</label>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios13" value="опрометчивый" required>
								  опрометчивый
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios13" value="тихий" required>
								  тихий
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios13" value="боязливый" required>
								  боязливый
								</label>
							  </div>
							</div>
							<div class="form-group">
								<label>14 блок</label>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios14" value="внимательный" required>
								  внимательный
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios14" value="неблагоразумный" required>
								  неблагоразумный
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios14" value="смелый" required>
								  смелый
								</label>
							  </div>
							</div>
							<div class="form-group">
								<label>15 блок</label>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios15" value="рассудительный" required>
								  рассудительный
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios15" value="быстрый" required>
								  быстрый
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios15" value="мужественный" required>
								  мужественный
								</label>
							  </div>
							</div>
							<div class="form-group">
								<label>16 блок</label>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios16" value="предприимчивый" required>
								  предприимчивый
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios16" value="осторожный" required>
								  осторожный
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios16" value="предусмотрительный" required>
								  предусмотрительный
								</label>
							  </div>
							</div>
							<div class="form-group">
								<label>17 блок</label>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios17" value="взволнованный" required>
								  взволнованный
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios17" value="рассеянный" required>
								  рассеянный
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios17" value="робкий" required>
								  робкий
								</label>
							  </div>
							</div>
							<div class="form-group">
								<label>18 блок</label>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios18" value="малодушный" required>
								  малодушный
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios18" value="неосторожный" required>
								  неосторожный
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios18" value="бесцеремонный" required>
								  бесцеремонный
								</label>
							  </div>
							</div>
							<div class="form-group">
								<label>19 блок</label>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios19" value="пугливый" required>
								  пугливый
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios19" value="нерешительный" required>
								  нерешительный
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios19" value="нервный" required>
								  нервный
								</label>
							  </div>
							</div>
							<div class="form-group">
								<label>20 блок</label>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios20" value="исполнительный" required>
								  исполнительный
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios20" value="преданный" required>
								  преданный
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios20" value="авантюрный" required>
								  авантюрный
								</label>
							  </div>
							</div>
							<div class="form-group">
								<label>21 блок</label>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios21" value="предусмотрительный" required>
								  предусмотрительный
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios21" value="бойкий" required>
								  бойкий
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios21" value="отчаянный" required>
								  отчаянный
								</label>
							  </div>
							</div>
							<div class="form-group">
								<label>22 блок</label>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios22" value="укрощенный" required>
								  укрощенный
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios22" value="безразличный" required>
								  безразличный
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios22" value="небрежный" required>
								  небрежный
								</label>
							  </div>
							</div>
							<div class="form-group">
								<label>23 блок</label>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios23" value="осторожный" required>
								  осторожный
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios23" value="беззаботный" required>
								  беззаботный
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios23" value="терпеливый" required>
								  терпеливый
								</label>
							  </div>
							</div>
							<div class="form-group">
								<label>24 блок</label>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios24" value="разумный" required>
								  разумный
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios24" value="заботливый" required>
								  заботливый
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios24" value="храбрый" required>
								  храбрый
								</label>
							  </div>
							</div>
							<div class="form-group">
								<label>25 блок</label>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios25" value="предвидящий" required>
								  предвидящий
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios25" value="неустрашимый" required>
								  неустрашимый
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios25" value="добросовестный" required>
								  добросовестный
								</label>
							  </div>
							</div>
							<div class="form-group">
								<label>26 блок</label>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios26" value="поспешный" required>
								  поспешный
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios26" value="пугливый" required>
								  пугливый
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios26" value="беззаботный" required>
								  беззаботный
								</label>
							  </div>
							</div>
							<div class="form-group">
								<label>27 блок</label>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios27" value="рассеянный" required>
								  рассеянный
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios27" value="опрометчивый" required>
								  опрометчивый
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios27" value="пессимистичный" required>
								  пессимистичный
								</label>
							  </div>
							</div>
							<div class="form-group">
								<label>28 блок</label>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios28" value="осмотрительный" required>
								  осмотрительный
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios28" value="рассудительный" required>
								  рассудительный
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios28" value="предприимчивый" required>
								  предприимчивый
								</label>
							  </div>
							</div>
							<div class="form-group">
								<label>29 блок</label>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios29" value="тихий" required>
								  тихий
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios29" value="неорганизованный" required>
								  неорганизованный
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios29" value="боязливый" required>
								  боязливый
								</label>
							  </div>
							</div>
							<div class="form-group">
								<label>30 блок</label>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios30" value="оптимистичный" required>
								  оптимистичный
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios30" value="бдительный" required>
								  бдительный
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" name="optionsRadios30" value="беззаботный" required>
								  беззаботный
								</label>
							  </div>
							</div>
							
							
							
							<div class="box-footer">
								<input name="submit" type="submit" class="btn btn-primary"></input>
							</div>
						</div>
		</form>
		
	</div>

