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
                <h1 class="page-header"> Доступный тест №7</h1>
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
		<h4 style="text-indent: 25px;">
		    Отвечая на нижеприведенные вопросы, необходимо выбрать ответ «да»
        или «нет». Если Вы затрудняетесь с ответом, то вспомните, что «да»
        объединяет как явное «да», так и «скорее да, чем нет». То же относится и к
        ответу «нет»: он объединяет явное «нет» и «скорее нет, чем да».
        </h4>
        <h4 style="text-indent: 25px;">
            Отвечать на вопросы следует быстро, не задумываясь надолго. Ответ,
        который первый приходит в голову, как: правило, является и наиболее
        точным.
		</h4>

		<form method="post" style="padding-bottom: 25px;">
			<div class="box-body">  
				
				<div class="form-group">
					<label>1.   Включаясь в работу, как правило, оптимистично надеюсь на успех.</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios1" value="да" required>
					  да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios1" value="нет">
					  нет
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>2.  В деятельности активен.</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios2" value="да" required>
					  да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios2" value="нет">
					  нет
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>3.  Склонен к проявлению инициативности.</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios3" value="да" required>
					  да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios3" value="нет">
					  нет
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>4.  При выполнении ответственных заданий стараюсь, по возможности, найти причины отказа от них.</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios4" value="да" required>
					  да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios4" value="нет">
					  нет
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>5.  Часто выбираю крайности: либо занижено легкие задания, либо нереалистично высокие по трудности.</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios5" value="да" required>
					  да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios5" value="нет">
					  нет
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>6.  При встрече с препятствиями, как правило, не отступаю, а ищу способы их преодоления.</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios6" value="да" required>
					  да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios6" value="нет">
					  нет
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>7.  При чередовании успехов и неудач склонен к переоценке своих успехов.</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios7" value="да" required>
					  да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios7" value="нет">
					  нет
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>8.  Продуктивность деятельности в основном зависит от моей собственной целеустремленности, а не от внешнего контроля.</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios8" value="да" required>
					  да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios8" value="нет">
					  нет
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>9.  При выполнении достаточно трудных заданий, в условиях ограничения времени, результативность моей деятельности ухудшается.</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios9" value="да" required>
					  да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios9" value="нет">
					  нет
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>10.  Склонен проявлять настойчивость в достижении цели.</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios10" value="да" required>
					  да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios10" value="нет">
					  нет
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>11.  Склонен планировать свое будущее на достаточно отдаленную перспективу.</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios11" value="да" required>
					  да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios11" value="нет">
					  нет
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>12.  Если я рискую, то скорее с умом, а не бесшабашно.</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios12" value="да" required>
					  да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios12" value="нет">
					  нет
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>13.  Я обычно не очень настойчив в достижении цели, особенно если отсутствует внешний контроль.</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios13" value="да" required>
					  да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios13" value="нет">
					  нет 
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>14.  Предпочитаю ставить перед собой средние по трудности или слегка завышенные, но достижимые цели, чем нереально высокие.</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios14" value="да" required>
					  да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios14" value="нет">
					  нет
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>15.  В случае неудачи при выполнении какого-либо задания, его притягательность, как правило, снижается.</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios15" value="да" required>
					  да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios15" value="нет">
					  нет
					</label>
				  </div> 
				</div>
				<div class="form-group">
					<label>16.  При чередовании успехов и неудач склонен к переоценке своих неудач.</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios16" value="да" required>
					  да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios16" value="нет">
					  нет
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>17.  Предпочитаю планировать свое будущее лишь на ближайшее время.</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios17" value="да" required>
					  да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios17" value="да" required>
					  нет
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>18.  При работе в условиях ограничения времени результативность моей деятельности обычно улучшается, даже если задание достаточно трудное.</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios18" value="да" required>
					  да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios18" value="нет">
					  нет
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>19.  В случае неудачи при выполнении чего-либо, от поставленной цели, я, как правило, не отказываюсь.</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios19" value="да" required>
					  да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios19" value="нет">
					  нет
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>20.  Если задание выбрал себе сам, то в случае неудачи его притягательность еще более возрастает.</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios20" value="да" required>
					  да
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios20" value="нет">
					  нет
					</label>
				  </div>
				</div>
				<div class="box-footer">
					<input name="submit" type="submit" class="btn btn-primary"></input>
				</div>
			</div>
				
		</form>
	</div>
