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
                <h1 class="page-header"> Доступный тест №3</h1>
            </div>
            <div class="col-lg-4">
            	<ol class="breadcrumb page-header" style="float: right; ">
			        <li><a href="../user/index"><i class="fa fa-dashboard"></i> Главная страница</a></li>
			        <li>Доступные тесты</li>
			    </ol>
			</div>
            <!-- /.col-lg-12 -->
        </div>


        <?php if(isset($_SESSION['success'])) {?>

        <div class="alert alert-success"><?php echo $_SESSION['success']?> </div>

        <?php }?>

		<form method="post" style="padding-bottom: 25px;">
			<div class="box-body">  
				<div class="form-group">
					<label>1. Какую фразу в беседе с сотрудником лучше использовать при отсутствии результата, чтобы подчиненный почуствовал свою ответственность:</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios0" value="Результата нет" required>
					  Результата нет
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios0" value="Мы не достигли результата" required>
					  Мы не достигли результата
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios0" value="Ты не выполнил задание" required>
					  Ты не выполнил задание
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>2.  Какой вопрос необходимо задать сотруднику, чтобы сформировать ответственное отношение к выданному заданию?</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios1" value="Как ты понял, что нужно сделать?" required>
					  Как ты понял, что нужно сделать?
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios1" value="Ты обещаешь это сделать?" required>
					  Ты обещаешь это сделать?
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios1" value="Ты знаешь, как это делать?" required>
					  Ты знаешь, как это делать?
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>3. Что скажет ответственный руководитель своему сотруднику, если ему не удалось "выбить" для подчиненного в профкоме путевку в санаторий?</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios2" value="Я очень старался, но нам с председателем профкома не удалось договориться" required>
					  Я очень старался, но нам с председателем профкома не удалось договориться
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios2" value="Я не смог отстоять твою кандидатуру" required>
					  Я не смог отстоять твою кандидатуру
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios2" value="Оказываеться, компания отправляет на отдых только многодетные семьи" required>
					  Оказываеться, компания отправляет на отдых только многодетные семьи
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>4. Что скажет подчиненный, который готов взять на себя ответственность за поставленную ему задачу?</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios3" value="Конечно, я сделаю все, чтобы достичь результата" required>
					  Конечно, я сделаю все, чтобы достичь результата
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios3" value="Конечно, я сделаю все, что только смогу" required>
					  Конечно, я сделаю все, что только смогу
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios3" value="Конечно, я постараюсь все успеть" required>
					  Конечно, я постараюсь все успеть
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>5. Подчиненный упрекнул Вас в том, что Вы не выполнили свое обещание. Что нужно ему ответить, чтобы сохранить авторитет и продемонстрировать лидерскую ответственность?</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios4" value="Компенсировать сотруднику причиненные неудобства, например, предоставить внеочередной отгул" required>
					  Компенсировать сотруднику причиненные неудобства, например, предоставить внеочередной отгул
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios4" value="Разъяснить ситуацию, по которой Вы вынуждены были так поступить" required>
					  Разъяснить ситуацию, по которой Вы вынуждены были так поступить
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios4" value="Признать свою ошибку и извиниться" required>
					  Признать свою ошибку и извиниться
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>6. По просьбе вышестоящего руководства Вы выбрали кандидата для руководства проектом. На ком лежит ответственность, если рекомендованный Вами сотрудник "провалит" довереный ему проект?</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios5" value="На сотруднике, ведь он несет ответственность за результаты проекта" required>
					  На сотруднике, ведь он несет ответственность за результаты проекта
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios5" value="На Вас, ведь Вы его рекомендовали" required>
					  На Вас, ведь Вы его рекомендовали
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios5" value="На Вашем начальнике, ведь он принимал окончательное решение по кандидатуре" required>
					  На Вашем начальнике, ведь он принимал окончательное решение по кандидатуре
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>7. Какой из озвученных сотрудником аргументов, является действительно объективной причиной невыполнения задания?</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios6" value="Бухгалтерия не предоставила необходимые данные" required>
					  Бухгалтерия не предоставила необходимые данные
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios6" value="Российская экономика находится в рецессии" required>
					  Российская экономика находится в рецессии
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios6" value="Объективных причин невыполнения не бывает" required>
					  Объективных причин невыполнения не бывает
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>8. Что должен сделать руководитель, чтобы сформировать ответственную позицию у подчиненного, если тот не справился с важной задачей?</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios7" value="Лишить премии, чтобы исключить повторения подобных ситуаций" required>
					  Лишить премии, чтобы исключить повторения подобных ситуаций
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios7" value="Обсудить, где работник ошибся и дать совет, как ему поступать в подобных случаях в будущем" required>
					  Обсудить, где работник ошибся и дать совет, как ему поступать в подобных случаях в будущем
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios7" value="Дать сотруднику возможность самостоятельно исправить ситуацию" required>
					  Дать сотруднику возможность самостоятельно исправить ситуацию
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>9. Ваш заместитель просит Вас согласовать премии сотрудникам, участвующим в дополнительной проектной работе. Ответственно ли он поступает?</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios8" value="Да, потому что вследствии внедрения проекта выручка компании увеличится" required>
					  Да, потому что вследствии внедрения проекта выручка компании увеличится
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios8" value="Да, дополнительная работа должна оплачиваться в любом случае" required>
					  Да, дополнительная работа должна оплачиваться в любом случае
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios8" value="Нет, он должен найти способы нематериальной мотивации" required>
					  Нет, он должен найти способы нематериальной мотивации
					</label>
				  </div>
				</div>
				<div class="form-group">
					<label>10. Можно ли считать ответственным Вашего подчиненного, если он отказывается от выполнения задания, которое находится вне рамок его должностных обязанностей?</label>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios9" value="Да, вне зависимости от причины отказа" required>
					  Да, вне зависимости от причины отказа
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios9" value="Да, при условии, что он не умеет делать то, что ему поручили" required>
					  Да, при условии, что он не умеет делать то, что ему поручили
					</label>
				  </div>
				  <div class="radio">
					<label>
					  <input type="radio" name="optionsRadios9" value="Нет, он в любом случае поступает безответственно" required>
					  Нет, он в любом случае поступает безответственно
					</label>
				  </div>
				</div>
				
				
				<div class="box-footer">
					<input name="submit" type="submit" class="btn btn-primary"></input>
				</div>
			</div>
		</form>

	</div>

