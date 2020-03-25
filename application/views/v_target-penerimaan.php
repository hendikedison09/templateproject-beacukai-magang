<link rel="stylesheet" href="assets/css/style.css">

<div class="beranda">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<p id="title">TARGET DAN REALISASI PENERIMAAN KPPBC TMP TANJUNG EMAS TH.2018</p>
						<div class="dropdown-divider"></div>
						<div class="isi-target">
							<div class="post-content">
								<script type="text/javascript" src="https://www.google.com/jsapi"></script>
								<script type="text/javascript">
									google.load("visualization", "1", {
										packages: ["corechart"]
									});
									google.setOnLoadCallback(drawChart);

									function drawChart() {
										var data = google.visualization.arrayToDataTable([
											['Bulan', 'Target', 'Realisasi'],
											['Jan', 215.2248384, 215.301528011],
											['Feb', 399.0627212, 399.077759804],
											['Mar', 497.7074388, 497.780839165],
											['Apr', 650.7698002, 650.845001953],
											['Mei', 857.6383712, 857.778917201],
											['Jun', 945.2772732, 945.490738746],
											['Jul', 1119.943643, 1120.07408819],
											['Agu', 1283.6041972, 1283.67280059],
											['Sep', 1455.4172074, 1455.41634394],
											['Okt', 1638.4398446, 1638.43421479],
											['Nov', 1837.7673938, 1837.8490124],
											['Des', 2021.1976538, 2021.21453687],
										]);
										var data2 = google.visualization.arrayToDataTable([
											['Bulan', 'Target', 'Realisasi'],
											['Jan', 1.806577015, 8.687122],
											['Feb', 2.774923872, 14.479077],
											['Mar', 4.301092974, 21.938087],
											['Apr', 6.324890986, 31.813579],
											['Mei', 8.340067685, 42.047654],
											['Jun', 9.560998737, 48.48479064],
											['Jul', 11.28490877, 59.04828764],
											['Agu', 13.106830889, 69.512231382],
											['Sep', 15.49209023, 74.871330306],
											['Okt', 18.541779168, 86.496764493],
											['Nov', 21.017378746, 97.786821493],
											['Des', 24.405, 105.918335493],
										]);
										var data3 = google.visualization.arrayToDataTable([
											['Bulan', 'Target', 'Realisasi'],
											['', 0, 0],
										]);
										var total = google.visualization.arrayToDataTable([
											['Bulan', 'Target', 'Realisasi'],
											['', 0, 0],
											['Jan', 217.031415415, 223.988650011],
											['Feb', 401.837645072, 413.556836804],
											['Mar', 502.008531774, 519.718926165],
											['Apr', 657.094691186, 682.658580953],
											['Mei', 865.978438885, 899.826571201],
											['Jun', 954.838271937, 993.975529386],
											['Jul', 1131.22855177, 1179.12237583],
											['Agu', 1296.71102809, 1353.18503197],
											['Sep', 1470.90929763, 1530.28767425],
											['Okt', 1656.98162377, 1724.93097928],
											['Nov', 1858.78477255, 1935.63583389],
										]);
										var options = {
											title: 'Grafik Target & Realisasi',
											hAxis: {
												title: 'Bulan',
												titleTextStyle: {
													color: '#333'
												}
											},
											vAxis: {
												minValue: 0,
												title: 'Dalam Milyar'
											},
											pointSize: 5,
											legend: {
												position: 'in'
											},
											titlePosition: 'in',
											axisTitlesPosition: 'in',
											chartArea: {
												width: '82%',
												height: '70%'
											}
										};
										var chart4 = new google.visualization.AreaChart(document.getElementById('masuk'));
										chart4.draw(data, options);
										var chart2 = new google.visualization.AreaChart(document.getElementById('keluar'));
										google.visualization.events.addListener(chart2, 'ready', function () {
											var chart3 = new google.visualization.AreaChart(document.getElementById('cukai'));
											google.visualization.events.addListener(chart3, 'ready', function () {

												var chart = new google.visualization.AreaChart(document.getElementById('total'));
												google.visualization.events.addListener(chart, 'ready', function () {
													jQuery(function ($) {
														$("#tab2").hide();
														$("#tab3").hide();
														$("#tab1").hide();
														$(".btn-asd").each(function () {
															var th = $(this);
															th.on("click", function (e) {
																e.preventDefault();
																$(".btn-asd").removeClass("btn-asd-active");
																th.addClass("btn-asd-active");
																$(".tab-asd").hide();
																$(th.attr("data-target")).show();
															});
														});
													});

												});
												chart.draw(total, options);

											});

											chart3.draw(data3, options);
										});
										chart2.draw(data2, options);
									}

								</script>

								<a href="#" class="btn-asd btn-asd-active" data-target="#tab4">Total</a>
								<a href="#" class="btn-asd" data-target="#tab1">Bea Masuk</a>
								<a href="#" class="btn-asd" data-target="#tab2">Bea Keluar</a>
								<a href="#" class="btn-asd" data-target="#tab3">Cukai</a>
								<br>
								<br>
								<hr>
								<div id="tab4" class="tab-asd" width="100%" style="display: block;">
									<table width="100%" cellspacing="0">
										<caption>Total Target dan Realisasi Penerimaan</caption>
										<tbody>
											<tr>
												<th>Bulan</th>
												<th>Target</th>
												<th>Realisasi</th>
											</tr>

											<tr class="alternate">
												<td></td>
												<td>0,00</td>
												<td>0,00</td>
											</tr>
											<tr>
												<td>Jan</td>
												<td>217.031.415.415,00</td>
												<td>223.988.650.011,00</td>
											</tr>
											<tr class="alternate">
												<td>Feb</td>
												<td>184.806.229.657,00</td>
												<td>189.568.186.793,00</td>
											</tr>
											<tr>
												<td>Mar</td>
												<td>100.170.886.702,00</td>
												<td>106.162.089.361,00</td>
											</tr>
											<tr class="alternate">
												<td>Apr</td>
												<td>155.086.159.412,00</td>
												<td>162.939.654.788,00</td>
											</tr>
											<tr>
												<td>Mei</td>
												<td>208.883.747.699,00</td>
												<td>217.167.990.248,00</td>
											</tr>
											<tr class="alternate">
												<td>Jun</td>
												<td>88.859.833.052,00</td>
												<td>94.148.958.185,00</td>
											</tr>
											<tr>
												<td>Jul</td>
												<td>176.390.279.833,00</td>
												<td>185.146.846.442,00</td>
											</tr>
											<tr class="alternate">
												<td>Agu</td>
												<td>165.482.476.319,00</td>
												<td>174.062.656.146,00</td>
											</tr>
											<tr>
												<td>Sep</td>
												<td>174.198.269.541,00</td>
												<td>177.102.642.272,00</td>
											</tr>
											<tr class="alternate">
												<td>Okt</td>
												<td>186.072.326.138,00</td>
												<td>194.643.305.036,00</td>
											</tr>
											<tr>
												<td>Nov</td>
												<td>201.803.148.778,00</td>
												<td>210.704.854.607,00</td>
											</tr>
											<tr>
												<th>Total</th>
												<th>1.858.784.772.546,00</th>
												<th>1.935.635.833.889,00</th>
											</tr>
										</tbody>
									</table>
									<div id="total" style="height: 400px;">
										<div style="position: relative;">
											<div style="position: relative; width: 929px; height: 400px;" dir="ltr">
												<div style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;" aria-label="A chart.">
													<svg width="929" height="400" style="overflow: hidden;" aria-label="A chart.">
														<defs id="defs">
															<clipPath id="_ABSTRACT_RENDERER_ID_3">
																<rect x="84" y="60" width="762" height="280"></rect>
															</clipPath>
														</defs>
														<rect x="0" y="0" width="929" height="400" stroke="none" stroke-width="0" fill="#ffffff"></rect>
														<g>
															<rect x="84" y="60" width="762" height="280" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
															<g clip-path="url(http://bctemas.beacukai.go.id/terget-penerimaan/#_ABSTRACT_RENDERER_ID_3)">
																<g>
																	<rect x="84" y="339" width="762" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
																	<rect x="84" y="269" width="762" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
																	<rect x="84" y="200" width="762" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
																	<rect x="84" y="130" width="762" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
																	<rect x="84" y="60" width="762" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
																</g>
																<g>
																	<g>
																		<path d="M84.5,339.5L84.5,339.5L153.6818181818182,309.2241175496075L222.86363636363637,283.443648512456L292.04545454545456,269.469809817527L361.22727272727275,247.83529057955298L430.40909090909093,218.6960077755425L499.5909090909091,206.3000610647885L568.7727272727273,181.693617028085L637.9545454545455,158.608811581445L707.1363636363637,134.30815298061498L776.3181818181819,108.35106348408499L845.5,80.19952422927497L845.5,339.5L845.5,339.5Z"
																		stroke="none" stroke-width="0" fill-opacity="0.3" fill="#3366cc"></path>
																	</g>
																	<g>
																		<path d="M84.5,339.5L84.5,339.5L153.6818181818182,308.2535833234655L222.86363636363637,281.80882126584197L292.04545454545456,266.9992097999825L361.22727272727275,244.2691279570565L430.40909090909093,213.9741933174605L499.5909090909091,200.840413650653L568.7727272727273,175.012428571715L637.9545454545455,150.730688040185L707.1363636363637,126.02486944212498L776.3181818181819,98.87212839043997L845.5,69.47880117234496L845.5,339.5L845.5,339.5Z"
																		stroke="none" stroke-width="0" fill-opacity="0.3" fill="#dc3912"></path>
																	</g>
																</g>
																<g>
																	<rect x="84" y="339" width="762" height="1" stroke="none" stroke-width="0" fill="#333333"></rect>
																</g>
																<g>
																	<path d="M84.5,339.5L153.6818181818182,309.2241175496075L222.86363636363637,283.443648512456L292.04545454545456,269.469809817527L361.22727272727275,247.83529057955298L430.40909090909093,218.6960077755425L499.5909090909091,206.3000610647885L568.7727272727273,181.693617028085L637.9545454545455,158.608811581445L707.1363636363637,134.30815298061498L776.3181818181819,108.35106348408499L845.5,80.19952422927497"
																	stroke="#3366cc" stroke-width="2" fill-opacity="1" fill="none"></path>
																	<path d="M84.5,339.5L153.6818181818182,308.2535833234655L222.86363636363637,281.80882126584197L292.04545454545456,266.9992097999825L361.22727272727275,244.2691279570565L430.40909090909093,213.9741933174605L499.5909090909091,200.840413650653L568.7727272727273,175.012428571715L637.9545454545455,150.730688040185L707.1363636363637,126.02486944212498L776.3181818181819,98.87212839043997L845.5,69.47880117234496"
																	stroke="#dc3912" stroke-width="2" fill-opacity="1" fill="none"></path>
																</g>
															</g>
															<g>
																<circle cx="84.5" cy="339.5" r="3.5" stroke="none" stroke-width="0" fill="#3366cc"></circle>
																<circle cx="153.6818181818182" cy="309.2241175496075" r="3.5" stroke="none" stroke-width="0" fill="#3366cc"></circle>
																<circle cx="222.86363636363637" cy="283.443648512456" r="3.5" stroke="none" stroke-width="0" fill="#3366cc"></circle>
																<circle cx="292.04545454545456" cy="269.469809817527" r="3.5" stroke="none" stroke-width="0" fill="#3366cc"></circle>
																<circle cx="361.22727272727275" cy="247.83529057955298" r="3.5" stroke="none" stroke-width="0" fill="#3366cc"></circle>
																<circle cx="430.40909090909093" cy="218.6960077755425" r="3.5" stroke="none" stroke-width="0" fill="#3366cc"></circle>
																<circle cx="499.5909090909091" cy="206.3000610647885" r="3.5" stroke="none" stroke-width="0" fill="#3366cc"></circle>
																<circle cx="568.7727272727273" cy="181.693617028085" r="3.5" stroke="none" stroke-width="0" fill="#3366cc"></circle>
																<circle cx="637.9545454545455" cy="158.608811581445" r="3.5" stroke="none" stroke-width="0" fill="#3366cc"></circle>
																<circle cx="707.1363636363637" cy="134.30815298061498" r="3.5" stroke="none" stroke-width="0" fill="#3366cc"></circle>
																<circle cx="776.3181818181819" cy="108.35106348408499" r="3.5" stroke="none" stroke-width="0" fill="#3366cc"></circle>
																<circle cx="845.5" cy="80.19952422927497" r="3.5" stroke="none" stroke-width="0" fill="#3366cc"></circle>
																<circle cx="84.5" cy="339.5" r="3.5" stroke="none" stroke-width="0" fill="#dc3912"></circle>
																<circle cx="153.6818181818182" cy="308.2535833234655" r="3.5" stroke="none" stroke-width="0" fill="#dc3912"></circle>
																<circle cx="222.86363636363637" cy="281.80882126584197" r="3.5" stroke="none" stroke-width="0" fill="#dc3912"></circle>
																<circle cx="292.04545454545456" cy="266.9992097999825" r="3.5" stroke="none" stroke-width="0" fill="#dc3912"></circle>
																<circle cx="361.22727272727275" cy="244.2691279570565" r="3.5" stroke="none" stroke-width="0" fill="#dc3912"></circle>
																<circle cx="430.40909090909093" cy="213.9741933174605" r="3.5" stroke="none" stroke-width="0" fill="#dc3912"></circle>
																<circle cx="499.5909090909091" cy="200.840413650653" r="3.5" stroke="none" stroke-width="0" fill="#dc3912"></circle>
																<circle cx="568.7727272727273" cy="175.012428571715" r="3.5" stroke="none" stroke-width="0" fill="#dc3912"></circle>
																<circle cx="637.9545454545455" cy="150.730688040185" r="3.5" stroke="none" stroke-width="0" fill="#dc3912"></circle>
																<circle cx="707.1363636363637" cy="126.02486944212498" r="3.5" stroke="none" stroke-width="0" fill="#dc3912"></circle>
																<circle cx="776.3181818181819" cy="98.87212839043997" r="3.5" stroke="none" stroke-width="0" fill="#dc3912"></circle>
																<circle cx="845.5" cy="69.47880117234496" r="3.5" stroke="none" stroke-width="0" fill="#dc3912"></circle>
															</g>
															<g>
																<g>
																	<g>
																		<text text-anchor="start" x="93" y="80.9" font-family="Arial" font-size="14" font-weight="bold" stroke="#ffffff" stroke-width="3"
																		fill="#000000" aria-hidden="true">Grafik Target &amp; Realisasi</text>
																		<text text-anchor="start" x="93" y="80.9" font-family="Arial" font-size="14" font-weight="bold" stroke="none" stroke-width="0"
																		fill="#000000">Grafik Target &amp; Realisasi</text>
																	</g>
																	<rect x="93" y="69" width="171" height="14" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
																</g>
															</g>
															<g>
																<g>
																	<text text-anchor="middle" x="153.6818181818182" y="360.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0"
																	fill="#222222">Jan</text>
																</g>
																<g>
																	<text text-anchor="middle" x="222.86363636363637" y="360.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0"
																	fill="#222222">Feb</text>
																</g>
																<g>
																	<text text-anchor="middle" x="292.04545454545456" y="360.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0"
																	fill="#222222">Mar</text>
																</g>
																<g>
																	<text text-anchor="middle" x="361.22727272727275" y="360.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0"
																	fill="#222222">Apr</text>
																</g>
																<g>
																	<text text-anchor="middle" x="430.40909090909093" y="360.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0"
																	fill="#222222">Mei</text>
																</g>
																<g>
																	<text text-anchor="middle" x="499.5909090909091" y="360.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0"
																	fill="#222222">Jun</text>
																</g>
																<g>
																	<text text-anchor="middle" x="568.7727272727273" y="360.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0"
																	fill="#222222">Jul</text>
																</g>
																<g>
																	<text text-anchor="middle" x="637.9545454545455" y="360.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0"
																	fill="#222222">Agu</text>
																</g>
																<g>
																	<text text-anchor="middle" x="707.1363636363637" y="360.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0"
																	fill="#222222">Sep</text>
																</g>
																<g>
																	<text text-anchor="middle" x="776.3181818181819" y="360.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0"
																	fill="#222222">Okt</text>
																</g>
																<g>
																	<text text-anchor="middle" x="845.5" y="360.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#222222">Nov</text>
																</g>
																<g>
																	<text text-anchor="end" x="70" y="344.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">0</text>
																</g>
																<g>
																	<text text-anchor="end" x="70" y="274.65" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">500</text>
																</g>
																<g>
																	<text text-anchor="end" x="70" y="204.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">1,000</text>
																</g>
																<g>
																	<text text-anchor="end" x="70" y="135.14999999999998" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">1,500</text>
																</g>
																<g>
																	<text text-anchor="end" x="70" y="65.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">2,000</text>
																</g>
															</g>
															<g>
																<g>
																	<g>
																		<text text-anchor="end" x="837" y="80.9" font-family="Arial" font-size="14" font-style="italic" stroke="#ffffff" stroke-width="3"
																		fill="#333333" aria-hidden="true">Bulan / Dalam Milyar</text>
																		<text text-anchor="end" x="837" y="80.9" font-family="Arial" font-size="14" font-style="italic" stroke="none" stroke-width="0"
																		fill="#333333">Bulan / Dalam Milyar</text>
																	</g>
																	<rect x="287" y="69" width="550" height="14" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
																</g>
															</g>
															<g>
																<rect x="84" y="92" width="186" height="14" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
																<g>
																	<rect x="84" y="92" width="73" height="14" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
																	<g>
																		<g>
																			<text text-anchor="start" x="117" y="103.9" font-family="Arial" font-size="14" stroke="#ffffff" stroke-width="3" fill="#222222"
																			aria-hidden="true">Target</text>
																			<text text-anchor="start" x="117" y="103.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#222222">Target</text>
																		</g>
																	</g>
																	<rect x="84" y="99" width="28" height="7" stroke="none" stroke-width="0" fill-opacity="0.3" fill="#3366cc"></rect>
																	<path d="M84,99L112,99" stroke="#3366cc" stroke-width="2" fill-opacity="1" fill="none"></path>
																	<circle cx="98" cy="99" r="3.5" stroke="none" stroke-width="0" fill="#3366cc"></circle>
																</g>
																<g>
																	<rect x="180" y="92" width="90" height="14" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
																	<g>
																		<g>
																			<text text-anchor="start" x="213" y="103.9" font-family="Arial" font-size="14" stroke="#ffffff" stroke-width="3" fill="#222222"
																			aria-hidden="true">Realisasi</text>
																			<text text-anchor="start" x="213" y="103.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#222222">Realisasi</text>
																		</g>
																	</g>
																	<rect x="180" y="99" width="28" height="7" stroke="none" stroke-width="0" fill-opacity="0.3" fill="#dc3912"></rect>
																	<path d="M180,99L208,99" stroke="#dc3912" stroke-width="2" fill-opacity="1" fill="none"></path>
																	<circle cx="194" cy="99" r="3.5" stroke="none" stroke-width="0" fill="#dc3912"></circle>
																</g>
															</g>
														</g>
														<g></g>
													</svg>
													<div aria-label="A tabular representation of the data in the chart." style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;">
														<table>
															<thead>
																<tr>
																	<th>Bulan</th>
																	<th>Target</th>
																	<th>Realisasi</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td></td>
																	<td>0</td>
																	<td>0</td>
																</tr>
																<tr>
																	<td>Jan</td>
																	<td>217.031</td>
																	<td>223.989</td>
																</tr>
																<tr>
																	<td>Feb</td>
																	<td>401.838</td>
																	<td>413.557</td>
																</tr>
																<tr>
																	<td>Mar</td>
																	<td>502.009</td>
																	<td>519.719</td>
																</tr>
																<tr>
																	<td>Apr</td>
																	<td>657.095</td>
																	<td>682.659</td>
																</tr>
																<tr>
																	<td>Mei</td>
																	<td>865.978</td>
																	<td>899.827</td>
																</tr>
																<tr>
																	<td>Jun</td>
																	<td>954.838</td>
																	<td>993.976</td>
																</tr>
																<tr>
																	<td>Jul</td>
																	<td>1,131.229</td>
																	<td>1,179.122</td>
																</tr>
																<tr>
																	<td>Agu</td>
																	<td>1,296.711</td>
																	<td>1,353.185</td>
																</tr>
																<tr>
																	<td>Sep</td>
																	<td>1,470.909</td>
																	<td>1,530.288</td>
																</tr>
																<tr>
																	<td>Okt</td>
																	<td>1,656.982</td>
																	<td>1,724.931</td>
																</tr>
																<tr>
																	<td>Nov</td>
																	<td>1,858.785</td>
																	<td>1,935.636</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
											<div style="display: none; position: absolute; top: 410px; left: 939px; white-space: nowrap; font-family: Arial; font-size: 14px; font-weight: bold;"
											aria-hidden="true">865.978</div>
											<div></div>
										</div>
									</div>
								</div>
								<div id="tab1" class="tab-asd" width="100%" style="display: none;">
									<table width="100%" cellspacing="0">
										<caption>Target dan Realisasi Penerimaan Bea Masuk</caption>
										<tbody>
											<tr>
												<th>Bulan</th>
												<th>Target</th>
												<th>Realisasi</th>
											</tr>
											<tr class="alternate">
												<td>Des</td>
												<td>183.430.260.000,00</td>
												<td>183.365.524.470,00</td>
											</tr>
											<tr>
												<td>Nov</td>
												<td>199.327.549.200,00</td>
												<td>199.414.797.607,00</td>
											</tr>
											<tr class="alternate">
												<td>Okt</td>
												<td>183.022.637.200,00</td>
												<td>183.017.870.849,00</td>
											</tr>
											<tr>
												<td>Sep</td>
												<td>171.813.010.200,00</td>
												<td>171.743.543.348,00</td>
											</tr>
											<tr class="alternate">
												<td>Agu</td>
												<td>163.660.554.200,00</td>
												<td>163.598.712.404,00</td>
											</tr>
											<tr>
												<td>Jul</td>
												<td>174.666.369.800,00</td>
												<td>174.583.349.442,00</td>
											</tr>
											<tr class="alternate">
												<td>Jun</td>
												<td>87.638.902.000,00</td>
												<td>87.711.821.545,00</td>
											</tr>
											<tr>
												<td>Mei</td>
												<td>206.868.571.000,00</td>
												<td>206.933.915.248,00</td>
											</tr>
											<tr class="alternate">
												<td>Apr</td>
												<td>153.062.361.400,00</td>
												<td>153.064.162.788,00</td>
											</tr>
											<tr>
												<td>Mar</td>
												<td>98.644.717.600,00</td>
												<td>98.703.079.361,00</td>
											</tr>
											<tr class="alternate">
												<td>Feb</td>
												<td>183.837.882.800,00</td>
												<td>183.776.231.793,00</td>
											</tr>
											<tr>
												<td>Jan</td>
												<td>215.224.838.400,00</td>
												<td>215.301.528.011,00</td>
											</tr>
											<tr>
												<th>Total</th>
												<th>2.021.197.653.800,00</th>
												<th>2.021.214.536.866,00</th>
											</tr>
										</tbody>
									</table>
									<div id="masuk" style="height: 400px;">
										<div style="position: relative;">
											<div style="position: relative; width: 929px; height: 400px;" dir="ltr">
												<div style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;" aria-label="A chart.">
													<svg width="929" height="400" style="overflow: hidden;" aria-label="A chart.">
														<defs id="defs">
															<clipPath id="_ABSTRACT_RENDERER_ID_0">
																<rect x="84" y="60" width="762" height="280"></rect>
															</clipPath>
														</defs>
														<rect x="0" y="0" width="929" height="400" stroke="none" stroke-width="0" fill="#ffffff"></rect>
														<g>
															<rect x="84" y="60" width="762" height="280" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
															<g clip-path="url(http://bctemas.beacukai.go.id/terget-penerimaan/#_ABSTRACT_RENDERER_ID_0)">
																<g>
																	<rect x="84" y="339" width="762" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
																	<rect x="84" y="269" width="762" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
																	<rect x="84" y="200" width="762" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
																	<rect x="84" y="130" width="762" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
																	<rect x="84" y="60" width="762" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
																</g>
																<g>
																	<g>
																		<path d="M84.5,339.5L84.5,339.5L84.5,314.480112536L153.6818181818182,293.1089586605L222.86363636363637,281.6415102395L292.04545454545456,263.84801072675L361.22727272727275,239.799539348L430.40909090909093,229.61151699049998L499.5909090909091,209.30655150125L568.7727272727273,190.28101207549997L637.9545454545455,170.30774963974997L707.1363636363637,149.03136806524998L776.3181818181819,125.85954047074998L845.5,104.53577274575L845.5,339.5L845.5,339.5Z"
																		stroke="none" stroke-width="0" fill-opacity="0.3" fill="#3366cc"></path>
																	</g>
																	<g>
																		<path d="M84.5,339.5L84.5,339.5L84.5,314.4711973687213L153.6818181818182,293.107210422785L222.86363636363637,281.63297744706875L292.04545454545456,263.8392685229637L361.22727272727275,239.78320087538373L430.40909090909093,229.5867016207775L499.5909090909091,209.29138724791247L568.7727272727273,190.2730369314125L637.9545454545455,170.307850016975L707.1363636363637,149.0320225306625L776.3181818181819,125.85005230849998L845.5,104.53381008886248L845.5,339.5L845.5,339.5Z"
																		stroke="none" stroke-width="0" fill-opacity="0.3" fill="#dc3912"></path>
																	</g>
																</g>
																<g>
																	<rect x="84" y="339" width="762" height="1" stroke="none" stroke-width="0" fill="#333333"></rect>
																</g>
																<g>
																	<path d="M84.5,314.480112536L153.6818181818182,293.1089586605L222.86363636363637,281.6415102395L292.04545454545456,263.84801072675L361.22727272727275,239.799539348L430.40909090909093,229.61151699049998L499.5909090909091,209.30655150125L568.7727272727273,190.28101207549997L637.9545454545455,170.30774963974997L707.1363636363637,149.03136806524998L776.3181818181819,125.85954047074998L845.5,104.53577274575"
																	stroke="#3366cc" stroke-width="2" fill-opacity="1" fill="none"></path>
																	<path d="M84.5,314.4711973687213L153.6818181818182,293.107210422785L222.86363636363637,281.63297744706875L292.04545454545456,263.8392685229637L361.22727272727275,239.78320087538373L430.40909090909093,229.5867016207775L499.5909090909091,209.29138724791247L568.7727272727273,190.2730369314125L637.9545454545455,170.307850016975L707.1363636363637,149.0320225306625L776.3181818181819,125.85005230849998L845.5,104.53381008886248"
																	stroke="#dc3912" stroke-width="2" fill-opacity="1" fill="none"></path>
																</g>
															</g>
															<g>
																<circle cx="84.5" cy="314.480112536" r="3.5" stroke="none" stroke-width="0" fill="#3366cc"></circle>
																<circle cx="153.6818181818182" cy="293.1089586605" r="3.5" stroke="none" stroke-width="0" fill="#3366cc"></circle>
																<circle cx="222.86363636363637" cy="281.6415102395" r="3.5" stroke="none" stroke-width="0" fill="#3366cc"></circle>
																<circle cx="292.04545454545456" cy="263.84801072675" r="3.5" stroke="none" stroke-width="0" fill="#3366cc"></circle>
																<circle cx="361.22727272727275" cy="239.799539348" r="3.5" stroke="none" stroke-width="0" fill="#3366cc"></circle>
																<circle cx="430.40909090909093" cy="229.61151699049998" r="3.5" stroke="none" stroke-width="0" fill="#3366cc"></circle>
																<circle cx="499.5909090909091" cy="209.30655150125" r="3.5" stroke="none" stroke-width="0" fill="#3366cc"></circle>
																<circle cx="568.7727272727273" cy="190.28101207549997" r="3.5" stroke="none" stroke-width="0" fill="#3366cc"></circle>
																<circle cx="637.9545454545455" cy="170.30774963974997" r="3.5" stroke="none" stroke-width="0" fill="#3366cc"></circle>
																<circle cx="707.1363636363637" cy="149.03136806524998" r="3.5" stroke="none" stroke-width="0" fill="#3366cc"></circle>
																<circle cx="776.3181818181819" cy="125.85954047074998" r="3.5" stroke="none" stroke-width="0" fill="#3366cc"></circle>
																<circle cx="845.5" cy="104.53577274575" r="3.5" stroke="none" stroke-width="0" fill="#3366cc"></circle>
																<circle cx="84.5" cy="314.4711973687213" r="3.5" stroke="none" stroke-width="0" fill="#dc3912"></circle>
																<circle cx="153.6818181818182" cy="293.107210422785" r="3.5" stroke="none" stroke-width="0" fill="#dc3912"></circle>
																<circle cx="222.86363636363637" cy="281.63297744706875" r="3.5" stroke="none" stroke-width="0" fill="#dc3912"></circle>
																<circle cx="292.04545454545456" cy="263.8392685229637" r="3.5" stroke="none" stroke-width="0" fill="#dc3912"></circle>
																<circle cx="361.22727272727275" cy="239.78320087538373" r="3.5" stroke="none" stroke-width="0" fill="#dc3912"></circle>
																<circle cx="430.40909090909093" cy="229.5867016207775" r="3.5" stroke="none" stroke-width="0" fill="#dc3912"></circle>
																<circle cx="499.5909090909091" cy="209.29138724791247" r="3.5" stroke="none" stroke-width="0" fill="#dc3912"></circle>
																<circle cx="568.7727272727273" cy="190.2730369314125" r="3.5" stroke="none" stroke-width="0" fill="#dc3912"></circle>
																<circle cx="637.9545454545455" cy="170.307850016975" r="3.5" stroke="none" stroke-width="0" fill="#dc3912"></circle>
																<circle cx="707.1363636363637" cy="149.0320225306625" r="3.5" stroke="none" stroke-width="0" fill="#dc3912"></circle>
																<circle cx="776.3181818181819" cy="125.85005230849998" r="3.5" stroke="none" stroke-width="0" fill="#dc3912"></circle>
																<circle cx="845.5" cy="104.53381008886248" r="3.5" stroke="none" stroke-width="0" fill="#dc3912"></circle>
															</g>
															<g>
																<g>
																	<g>
																		<text text-anchor="start" x="93" y="80.9" font-family="Arial" font-size="14" font-weight="bold" stroke="#ffffff" stroke-width="3"
																		fill="#000000" aria-hidden="true">Grafik Target &amp; Realisasi</text>
																		<text text-anchor="start" x="93" y="80.9" font-family="Arial" font-size="14" font-weight="bold" stroke="none" stroke-width="0"
																		fill="#000000">Grafik Target &amp; Realisasi</text>
																	</g>
																	<rect x="93" y="69" width="171" height="14" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
																</g>
															</g>
															<g>
																<g>
																	<text text-anchor="middle" x="84.5" y="360.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#222222">Jan</text>
																</g>
																<g>
																	<text text-anchor="middle" x="153.6818181818182" y="360.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0"
																	fill="#222222">Feb</text>
																</g>
																<g>
																	<text text-anchor="middle" x="222.86363636363637" y="360.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0"
																	fill="#222222">Mar</text>
																</g>
																<g>
																	<text text-anchor="middle" x="292.04545454545456" y="360.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0"
																	fill="#222222">Apr</text>
																</g>
																<g>
																	<text text-anchor="middle" x="361.22727272727275" y="360.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0"
																	fill="#222222">Mei</text>
																</g>
																<g>
																	<text text-anchor="middle" x="430.40909090909093" y="360.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0"
																	fill="#222222">Jun</text>
																</g>
																<g>
																	<text text-anchor="middle" x="499.5909090909091" y="360.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0"
																	fill="#222222">Jul</text>
																</g>
																<g>
																	<text text-anchor="middle" x="568.7727272727273" y="360.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0"
																	fill="#222222">Agu</text>
																</g>
																<g>
																	<text text-anchor="middle" x="637.9545454545455" y="360.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0"
																	fill="#222222">Sep</text>
																</g>
																<g>
																	<text text-anchor="middle" x="707.1363636363637" y="360.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0"
																	fill="#222222">Okt</text>
																</g>
																<g>
																	<text text-anchor="middle" x="776.3181818181819" y="360.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0"
																	fill="#222222">Nov</text>
																</g>
																<g>
																	<text text-anchor="middle" x="845.5" y="360.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#222222">Des</text>
																</g>
																<g>
																	<text text-anchor="end" x="70" y="344.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">0</text>
																</g>
																<g>
																	<text text-anchor="end" x="70" y="274.65" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">600</text>
																</g>
																<g>
																	<text text-anchor="end" x="70" y="204.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">1,200</text>
																</g>
																<g>
																	<text text-anchor="end" x="70" y="135.15" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">1,800</text>
																</g>
																<g>
																	<text text-anchor="end" x="70" y="65.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">2,400</text>
																</g>
															</g>
															<g>
																<g>
																	<g>
																		<text text-anchor="end" x="837" y="80.9" font-family="Arial" font-size="14" font-style="italic" stroke="#ffffff" stroke-width="3"
																		fill="#333333" aria-hidden="true">Bulan / Dalam Milyar</text>
																		<text text-anchor="end" x="837" y="80.9" font-family="Arial" font-size="14" font-style="italic" stroke="none" stroke-width="0"
																		fill="#333333">Bulan / Dalam Milyar</text>
																	</g>
																	<rect x="287" y="69" width="550" height="14" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
																</g>
															</g>
															<g>
																<rect x="84" y="92" width="186" height="14" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
																<g>
																	<rect x="84" y="92" width="73" height="14" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
																	<g>
																		<g>
																			<text text-anchor="start" x="117" y="103.9" font-family="Arial" font-size="14" stroke="#ffffff" stroke-width="3" fill="#222222"
																			aria-hidden="true">Target</text>
																			<text text-anchor="start" x="117" y="103.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#222222">Target</text>
																		</g>
																	</g>
																	<rect x="84" y="99" width="28" height="7" stroke="none" stroke-width="0" fill-opacity="0.3" fill="#3366cc"></rect>
																	<path d="M84,99L112,99" stroke="#3366cc" stroke-width="2" fill-opacity="1" fill="none"></path>
																	<circle cx="98" cy="99" r="3.5" stroke="none" stroke-width="0" fill="#3366cc"></circle>
																</g>
																<g>
																	<rect x="180" y="92" width="90" height="14" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
																	<g>
																		<g>
																			<text text-anchor="start" x="213" y="103.9" font-family="Arial" font-size="14" stroke="#ffffff" stroke-width="3" fill="#222222"
																			aria-hidden="true">Realisasi</text>
																			<text text-anchor="start" x="213" y="103.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#222222">Realisasi</text>
																		</g>
																	</g>
																	<rect x="180" y="99" width="28" height="7" stroke="none" stroke-width="0" fill-opacity="0.3" fill="#dc3912"></rect>
																	<path d="M180,99L208,99" stroke="#dc3912" stroke-width="2" fill-opacity="1" fill="none"></path>
																	<circle cx="194" cy="99" r="3.5" stroke="none" stroke-width="0" fill="#dc3912"></circle>
																</g>
															</g>
														</g>
														<g></g>
													</svg>
													<div aria-label="A tabular representation of the data in the chart." style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;">
														<table>
															<thead>
																<tr>
																	<th>Bulan</th>
																	<th>Target</th>
																	<th>Realisasi</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>Jan</td>
																	<td>215.225</td>
																	<td>215.302</td>
																</tr>
																<tr>
																	<td>Feb</td>
																	<td>399.063</td>
																	<td>399.078</td>
																</tr>
																<tr>
																	<td>Mar</td>
																	<td>497.707</td>
																	<td>497.781</td>
																</tr>
																<tr>
																	<td>Apr</td>
																	<td>650.77</td>
																	<td>650.845</td>
																</tr>
																<tr>
																	<td>Mei</td>
																	<td>857.638</td>
																	<td>857.779</td>
																</tr>
																<tr>
																	<td>Jun</td>
																	<td>945.277</td>
																	<td>945.491</td>
																</tr>
																<tr>
																	<td>Jul</td>
																	<td>1,119.944</td>
																	<td>1,120.074</td>
																</tr>
																<tr>
																	<td>Agu</td>
																	<td>1,283.604</td>
																	<td>1,283.673</td>
																</tr>
																<tr>
																	<td>Sep</td>
																	<td>1,455.417</td>
																	<td>1,455.416</td>
																</tr>
																<tr>
																	<td>Okt</td>
																	<td>1,638.44</td>
																	<td>1,638.434</td>
																</tr>
																<tr>
																	<td>Nov</td>
																	<td>1,837.767</td>
																	<td>1,837.849</td>
																</tr>
																<tr>
																	<td>Des</td>
																	<td>2,021.198</td>
																	<td>2,021.215</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
											<div style="display: none; position: absolute; top: 410px; left: 939px; white-space: nowrap; font-family: Arial; font-size: 14px;"
											aria-hidden="true">Realisasi</div>
											<div></div>
										</div>
									</div>
								</div>
								<div id="tab2" class="tab-asd" width="100%" style="display: none;">
									<table width="100%" cellspacing="0">
										<caption>Target dan Realisasi Penerimaan Bea Keluar</caption>
										<tbody>
											<tr>
												<th>Bulan</th>
												<th>Target</th>
												<th>Realisasi</th>
											</tr>
											<tr class="alternate">
												<td>Des</td>
												<td>3.387.621.254,00</td>
												<td>8.131.514.000,00</td>
											</tr>
											<tr>
												<td>Nov</td>
												<td>2.475.599.578,00</td>
												<td>11.290.057.000,00</td>
											</tr>
											<tr class="alternate">
												<td>Okt</td>
												<td>3.049.688.938,00</td>
												<td>11.625.434.187,00</td>
											</tr>
											<tr>
												<td>Sep</td>
												<td>2.385.259.341,00</td>
												<td>5.359.098.924,00</td>
											</tr>
											<tr class="alternate">
												<td>Agu</td>
												<td>1.821.922.119,00</td>
												<td>10.463.943.742,00</td>
											</tr>
											<tr>
												<td>Jul</td>
												<td>1.723.910.033,00</td>
												<td>10.563.497.000,00</td>
											</tr>
											<tr class="alternate">
												<td>Jun</td>
												<td>1.220.931.052,00</td>
												<td>6.437.136.640,00</td>
											</tr>
											<tr>
												<td>Mei</td>
												<td>2.015.176.699,00</td>
												<td>10.234.075.000,00</td>
											</tr>
											<tr class="alternate">
												<td>Apr</td>
												<td>2.023.798.012,00</td>
												<td>9.875.492.000,00</td>
											</tr>
											<tr>
												<td>Mar</td>
												<td>1.526.169.102,00</td>
												<td>7.459.010.000,00</td>
											</tr>
											<tr class="alternate">
												<td>Feb</td>
												<td>968.346.857,00</td>
												<td>5.791.955.000,00</td>
											</tr>
											<tr>
												<td>Jan</td>
												<td>1.806.577.015,00</td>
												<td>8.687.122.000,00</td>
											</tr>
											<tr>
												<th>Total</th>
												<th>24.405.000.000,00</th>
												<th>105.918.335.493,00</th>
											</tr>
										</tbody>
									</table>
									<div id="keluar" style="height: 400px;">
										<div style="position: relative;">
											<div style="position: relative; width: 929px; height: 400px;" dir="ltr">
												<div style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;" aria-label="A chart.">
													<svg width="929" height="400" style="overflow: hidden;" aria-label="A chart.">
														<defs id="defs">
															<clipPath id="_ABSTRACT_RENDERER_ID_1">
																<rect x="84" y="60" width="762" height="280"></rect>
															</clipPath>
														</defs>
														<rect x="0" y="0" width="929" height="400" stroke="none" stroke-width="0" fill="#ffffff"></rect>
														<g>
															<rect x="84" y="60" width="762" height="280" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
															<g clip-path="url(http://bctemas.beacukai.go.id/terget-penerimaan/#_ABSTRACT_RENDERER_ID_1)">
																<g>
																	<rect x="84" y="339" width="762" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
																	<rect x="84" y="269" width="762" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
																	<rect x="84" y="200" width="762" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
																	<rect x="84" y="130" width="762" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
																	<rect x="84" y="60" width="762" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
																</g>
																<g>
																	<g>
																		<path d="M84.5,339.5L84.5,339.5L84.5,335.299708440125L153.6818181818182,333.0483019976L222.86363636363637,329.49995883545L292.04545454545456,324.79462845755L361.22727272727275,320.109342632375L430.40909090909093,317.270677936475L499.5909090909091,313.26258710975L568.7727272727273,309.026618183075L637.9545454545455,303.48089021525L707.1363636363637,296.3903634344L776.3181818181819,290.63459441555L845.5,282.758375L845.5,339.5L845.5,339.5Z"
																		stroke="none" stroke-width="0" fill-opacity="0.3" fill="#3366cc"></path>
																	</g>
																	<g>
																		<path d="M84.5,339.5L84.5,339.5L84.5,319.30244135L153.6818181818182,305.836145975L222.86363636363637,288.493947725L292.04545454545456,265.533428825L361.22727272727275,241.73920445L430.40909090909093,226.772861762L499.5909090909091,202.21273123699999L568.7727272727273,177.88406203685L637.9545454545455,165.42415703854996L707.1363636363637,138.395022553775L776.3181818181819,112.14564002877498L845.5,93.23986997877498L845.5,339.5L845.5,339.5Z"
																		stroke="none" stroke-width="0" fill-opacity="0.3" fill="#dc3912"></path>
																	</g>
																</g>
																<g>
																	<rect x="84" y="339" width="762" height="1" stroke="none" stroke-width="0" fill="#333333"></rect>
																</g>
																<g>
																	<path d="M84.5,335.299708440125L153.6818181818182,333.0483019976L222.86363636363637,329.49995883545L292.04545454545456,324.79462845755L361.22727272727275,320.109342632375L430.40909090909093,317.270677936475L499.5909090909091,313.26258710975L568.7727272727273,309.026618183075L637.9545454545455,303.48089021525L707.1363636363637,296.3903634344L776.3181818181819,290.63459441555L845.5,282.758375"
																	stroke="#3366cc" stroke-width="2" fill-opacity="1" fill="none"></path>
																	<path d="M84.5,319.30244135L153.6818181818182,305.836145975L222.86363636363637,288.493947725L292.04545454545456,265.533428825L361.22727272727275,241.73920445L430.40909090909093,226.772861762L499.5909090909091,202.21273123699999L568.7727272727273,177.88406203685L637.9545454545455,165.42415703854996L707.1363636363637,138.395022553775L776.3181818181819,112.14564002877498L845.5,93.23986997877498"
																	stroke="#dc3912" stroke-width="2" fill-opacity="1" fill="none"></path>
																</g>
															</g>
															<g>
																<circle cx="84.5" cy="335.299708440125" r="3.5" stroke="none" stroke-width="0" fill="#3366cc"></circle>
																<circle cx="153.6818181818182" cy="333.0483019976" r="3.5" stroke="none" stroke-width="0" fill="#3366cc"></circle>
																<circle cx="222.86363636363637" cy="329.49995883545" r="3.5" stroke="none" stroke-width="0" fill="#3366cc"></circle>
																<circle cx="292.04545454545456" cy="324.79462845755" r="3.5" stroke="none" stroke-width="0" fill="#3366cc"></circle>
																<circle cx="361.22727272727275" cy="320.109342632375" r="3.5" stroke="none" stroke-width="0" fill="#3366cc"></circle>
																<circle cx="430.40909090909093" cy="317.270677936475" r="3.5" stroke="none" stroke-width="0" fill="#3366cc"></circle>
																<circle cx="499.5909090909091" cy="313.26258710975" r="3.5" stroke="none" stroke-width="0" fill="#3366cc"></circle>
																<circle cx="568.7727272727273" cy="309.026618183075" r="3.5" stroke="none" stroke-width="0" fill="#3366cc"></circle>
																<circle cx="637.9545454545455" cy="303.48089021525" r="3.5" stroke="none" stroke-width="0" fill="#3366cc"></circle>
																<circle cx="707.1363636363637" cy="296.3903634344" r="3.5" stroke="none" stroke-width="0" fill="#3366cc"></circle>
																<circle cx="776.3181818181819" cy="290.63459441555" r="3.5" stroke="none" stroke-width="0" fill="#3366cc"></circle>
																<circle cx="845.5" cy="282.758375" r="3.5" stroke="none" stroke-width="0" fill="#3366cc"></circle>
																<circle cx="84.5" cy="319.30244135" r="3.5" stroke="none" stroke-width="0" fill="#dc3912"></circle>
																<circle cx="153.6818181818182" cy="305.836145975" r="3.5" stroke="none" stroke-width="0" fill="#dc3912"></circle>
																<circle cx="222.86363636363637" cy="288.493947725" r="3.5" stroke="none" stroke-width="0" fill="#dc3912"></circle>
																<circle cx="292.04545454545456" cy="265.533428825" r="3.5" stroke="none" stroke-width="0" fill="#dc3912"></circle>
																<circle cx="361.22727272727275" cy="241.73920445" r="3.5" stroke="none" stroke-width="0" fill="#dc3912"></circle>
																<circle cx="430.40909090909093" cy="226.772861762" r="3.5" stroke="none" stroke-width="0" fill="#dc3912"></circle>
																<circle cx="499.5909090909091" cy="202.21273123699999" r="3.5" stroke="none" stroke-width="0" fill="#dc3912"></circle>
																<circle cx="568.7727272727273" cy="177.88406203685" r="3.5" stroke="none" stroke-width="0" fill="#dc3912"></circle>
																<circle cx="637.9545454545455" cy="165.42415703854996" r="3.5" stroke="none" stroke-width="0" fill="#dc3912"></circle>
																<circle cx="707.1363636363637" cy="138.395022553775" r="3.5" stroke="none" stroke-width="0" fill="#dc3912"></circle>
																<circle cx="776.3181818181819" cy="112.14564002877498" r="3.5" stroke="none" stroke-width="0" fill="#dc3912"></circle>
																<circle cx="845.5" cy="93.23986997877498" r="3.5" stroke="none" stroke-width="0" fill="#dc3912"></circle>
															</g>
															<g>
																<g>
																	<g>
																		<text text-anchor="start" x="93" y="80.9" font-family="Arial" font-size="14" font-weight="bold" stroke="#ffffff" stroke-width="3"
																		fill="#000000" aria-hidden="true">Grafik Target &amp; Realisasi</text>
																		<text text-anchor="start" x="93" y="80.9" font-family="Arial" font-size="14" font-weight="bold" stroke="none" stroke-width="0"
																		fill="#000000">Grafik Target &amp; Realisasi</text>
																	</g>
																	<rect x="93" y="69" width="171" height="14" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
																</g>
															</g>
															<g>
																<g>
																	<text text-anchor="middle" x="84.5" y="360.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#222222">Jan</text>
																</g>
																<g>
																	<text text-anchor="middle" x="153.6818181818182" y="360.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0"
																	fill="#222222">Feb</text>
																</g>
																<g>
																	<text text-anchor="middle" x="222.86363636363637" y="360.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0"
																	fill="#222222">Mar</text>
																</g>
																<g>
																	<text text-anchor="middle" x="292.04545454545456" y="360.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0"
																	fill="#222222">Apr</text>
																</g>
																<g>
																	<text text-anchor="middle" x="361.22727272727275" y="360.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0"
																	fill="#222222">Mei</text>
																</g>
																<g>
																	<text text-anchor="middle" x="430.40909090909093" y="360.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0"
																	fill="#222222">Jun</text>
																</g>
																<g>
																	<text text-anchor="middle" x="499.5909090909091" y="360.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0"
																	fill="#222222">Jul</text>
																</g>
																<g>
																	<text text-anchor="middle" x="568.7727272727273" y="360.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0"
																	fill="#222222">Agu</text>
																</g>
																<g>
																	<text text-anchor="middle" x="637.9545454545455" y="360.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0"
																	fill="#222222">Sep</text>
																</g>
																<g>
																	<text text-anchor="middle" x="707.1363636363637" y="360.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0"
																	fill="#222222">Okt</text>
																</g>
																<g>
																	<text text-anchor="middle" x="776.3181818181819" y="360.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0"
																	fill="#222222">Nov</text>
																</g>
																<g>
																	<text text-anchor="middle" x="845.5" y="360.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#222222">Des</text>
																</g>
																<g>
																	<text text-anchor="end" x="70" y="344.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">0</text>
																</g>
																<g>
																	<text text-anchor="end" x="70" y="274.65" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">30</text>
																</g>
																<g>
																	<text text-anchor="end" x="70" y="204.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">60</text>
																</g>
																<g>
																	<text text-anchor="end" x="70" y="135.14999999999998" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">90</text>
																</g>
																<g>
																	<text text-anchor="end" x="70" y="65.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">120</text>
																</g>
															</g>
															<g>
																<g>
																	<g>
																		<text text-anchor="end" x="837" y="80.9" font-family="Arial" font-size="14" font-style="italic" stroke="#ffffff" stroke-width="3"
																		fill="#333333" aria-hidden="true">Bulan / Dalam Milyar</text>
																		<text text-anchor="end" x="837" y="80.9" font-family="Arial" font-size="14" font-style="italic" stroke="none" stroke-width="0"
																		fill="#333333">Bulan / Dalam Milyar</text>
																	</g>
																	<rect x="287" y="69" width="550" height="14" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
																</g>
															</g>
															<g>
																<rect x="84" y="92" width="186" height="14" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
																<g>
																	<rect x="84" y="92" width="73" height="14" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
																	<g>
																		<g>
																			<text text-anchor="start" x="117" y="103.9" font-family="Arial" font-size="14" stroke="#ffffff" stroke-width="3" fill="#222222"
																			aria-hidden="true">Target</text>
																			<text text-anchor="start" x="117" y="103.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#222222">Target</text>
																		</g>
																	</g>
																	<rect x="84" y="99" width="28" height="7" stroke="none" stroke-width="0" fill-opacity="0.3" fill="#3366cc"></rect>
																	<path d="M84,99L112,99" stroke="#3366cc" stroke-width="2" fill-opacity="1" fill="none"></path>
																	<circle cx="98" cy="99" r="3.5" stroke="none" stroke-width="0" fill="#3366cc"></circle>
																</g>
																<g>
																	<rect x="180" y="92" width="90" height="14" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
																	<g>
																		<g>
																			<text text-anchor="start" x="213" y="103.9" font-family="Arial" font-size="14" stroke="#ffffff" stroke-width="3" fill="#222222"
																			aria-hidden="true">Realisasi</text>
																			<text text-anchor="start" x="213" y="103.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#222222">Realisasi</text>
																		</g>
																	</g>
																	<rect x="180" y="99" width="28" height="7" stroke="none" stroke-width="0" fill-opacity="0.3" fill="#dc3912"></rect>
																	<path d="M180,99L208,99" stroke="#dc3912" stroke-width="2" fill-opacity="1" fill="none"></path>
																	<circle cx="194" cy="99" r="3.5" stroke="none" stroke-width="0" fill="#dc3912"></circle>
																</g>
															</g>
														</g>
														<g></g>
													</svg>
													<div aria-label="A tabular representation of the data in the chart." style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;">
														<table>
															<thead>
																<tr>
																	<th>Bulan</th>
																	<th>Target</th>
																	<th>Realisasi</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>Jan</td>
																	<td>1.807</td>
																	<td>8.687</td>
																</tr>
																<tr>
																	<td>Feb</td>
																	<td>2.775</td>
																	<td>14.479</td>
																</tr>
																<tr>
																	<td>Mar</td>
																	<td>4.301</td>
																	<td>21.938</td>
																</tr>
																<tr>
																	<td>Apr</td>
																	<td>6.325</td>
																	<td>31.814</td>
																</tr>
																<tr>
																	<td>Mei</td>
																	<td>8.34</td>
																	<td>42.048</td>
																</tr>
																<tr>
																	<td>Jun</td>
																	<td>9.561</td>
																	<td>48.485</td>
																</tr>
																<tr>
																	<td>Jul</td>
																	<td>11.285</td>
																	<td>59.048</td>
																</tr>
																<tr>
																	<td>Agu</td>
																	<td>13.107</td>
																	<td>69.512</td>
																</tr>
																<tr>
																	<td>Sep</td>
																	<td>15.492</td>
																	<td>74.871</td>
																</tr>
																<tr>
																	<td>Okt</td>
																	<td>18.542</td>
																	<td>86.497</td>
																</tr>
																<tr>
																	<td>Nov</td>
																	<td>21.017</td>
																	<td>97.787</td>
																</tr>
																<tr>
																	<td>Des</td>
																	<td>24.405</td>
																	<td>105.918</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
											<div style="display: none; position: absolute; top: 410px; left: 939px; white-space: nowrap; font-family: Arial; font-size: 14px;"
											aria-hidden="true">Realisasi</div>
											<div></div>
										</div>
									</div>
								</div>
								<div id="tab3" class="tab-asd" width="100%" style="display: none;">
									<table width="100%" cellspacing="0">
										<caption>Target dan Realisasi Penerimaan Cukai</caption>
										<tbody>
											<tr>
												<th>Bulan</th>
												<th>Target</th>
												<th>Realisasi</th>
											</tr>
											<tr class="alternate">
												<td></td>
												<td>0,00</td>
												<td>0,00</td>
											</tr>
											<tr>
												<th>Total</th>
												<th>0,00</th>
												<th>0,00</th>
											</tr>
										</tbody>
									</table>
									<div id="cukai" style="height: 400px;">
										<div style="position: relative;">
											<div style="position: relative; width: 929px; height: 400px;" dir="ltr">
												<div style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;" aria-label="A chart.">
													<svg width="929" height="400" style="overflow: hidden;" aria-label="A chart.">
														<defs id="defs">
															<clipPath id="_ABSTRACT_RENDERER_ID_2">
																<rect x="84" y="60" width="762" height="280"></rect>
															</clipPath>
														</defs>
														<rect x="0" y="0" width="929" height="400" stroke="none" stroke-width="0" fill="#ffffff"></rect>
														<g>
															<rect x="84" y="60" width="762" height="280" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
															<g clip-path="url(http://bctemas.beacukai.go.id/terget-penerimaan/#_ABSTRACT_RENDERER_ID_2)">
																<g>
																	<rect x="84" y="339" width="762" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
																	<rect x="84" y="269" width="762" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
																	<rect x="84" y="200" width="762" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
																	<rect x="84" y="130" width="762" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
																	<rect x="84" y="60" width="762" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
																</g>
																<g>
																	<g></g>
																	<g></g>
																</g>
																<g>
																	<rect x="84" y="200" width="762" height="1" stroke="none" stroke-width="0" fill="#333333"></rect>
																</g>
																<g>
																	<g></g>
																	<g></g>
																</g>
															</g>
															<g>
																<circle cx="465" cy="200" r="3.5" stroke="none" stroke-width="0" fill="#3366cc"></circle>
																<g>
																	<circle cx="465" cy="200" r="6" stroke="#dc3912" stroke-width="1" fill="#ffffff"></circle>
																	<circle cx="465" cy="200" r="3.5" stroke="none" stroke-width="0" fill="#dc3912"></circle>
																</g>
															</g>
															<g>
																<g>
																	<g>
																		<text text-anchor="start" x="93" y="80.9" font-family="Arial" font-size="14" font-weight="bold" stroke="#ffffff" stroke-width="3"
																		fill="#000000" aria-hidden="true">Grafik Target &amp; Realisasi</text>
																		<text text-anchor="start" x="93" y="80.9" font-family="Arial" font-size="14" font-weight="bold" stroke="none" stroke-width="0"
																		fill="#000000">Grafik Target &amp; Realisasi</text>
																	</g>
																	<rect x="93" y="69" width="171" height="14" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
																</g>
															</g>
															<g>
																<g>
																	<text text-anchor="end" x="70" y="344.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">-1.0</text>
																</g>
																<g>
																	<text text-anchor="end" x="70" y="274.65" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">-0.5</text>
																</g>
																<g>
																	<text text-anchor="end" x="70" y="204.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">0.0</text>
																</g>
																<g>
																	<text text-anchor="end" x="70" y="135.15" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">0.5</text>
																</g>
																<g>
																	<text text-anchor="end" x="70" y="65.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">1.0</text>
																</g>
															</g>
															<g>
																<g>
																	<g>
																		<text text-anchor="end" x="837" y="80.9" font-family="Arial" font-size="14" font-style="italic" stroke="#ffffff" stroke-width="3"
																		fill="#333333" aria-hidden="true">Bulan / Dalam Milyar</text>
																		<text text-anchor="end" x="837" y="80.9" font-family="Arial" font-size="14" font-style="italic" stroke="none" stroke-width="0"
																		fill="#333333">Bulan / Dalam Milyar</text>
																	</g>
																	<rect x="287" y="69" width="550" height="14" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
																</g>
															</g>
															<g>
																<rect x="84" y="92" width="186" height="14" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
																<g>
																	<rect x="84" y="92" width="73" height="14" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
																	<g>
																		<g>
																			<text text-anchor="start" x="117" y="103.9" font-family="Arial" font-size="14" stroke="#ffffff" stroke-width="3" fill="#222222"
																			aria-hidden="true">Target</text>
																			<text text-anchor="start" x="117" y="103.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#222222">Target</text>
																		</g>
																	</g>
																	<rect x="84" y="99" width="28" height="7" stroke="none" stroke-width="0" fill-opacity="0.3" fill="#3366cc"></rect>
																	<path d="M84,99L112,99" stroke="#3366cc" stroke-width="2" fill-opacity="1" fill="none"></path>
																	<circle cx="98" cy="99" r="3.5" stroke="none" stroke-width="0" fill="#3366cc"></circle>
																</g>
																<g>
																	<rect x="180" y="92" width="90" height="14" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
																	<g>
																		<g>
																			<text text-anchor="start" x="213" y="103.9" font-family="Arial" font-size="14" stroke="#ffffff" stroke-width="3" fill="#222222"
																			aria-hidden="true">Realisasi</text>
																			<text text-anchor="start" x="213" y="103.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#222222">Realisasi</text>
																		</g>
																	</g>
																	<rect x="180" y="99" width="28" height="7" stroke="none" stroke-width="0" fill-opacity="0.3" fill="#dc3912"></rect>
																	<path d="M180,99L208,99" stroke="#dc3912" stroke-width="2" fill-opacity="1" fill="none"></path>
																	<circle cx="194" cy="99" r="3.5" stroke="none" stroke-width="0" fill="#dc3912"></circle>
																</g>
															</g>
														</g>
														<g></g>
													</svg>
													<div aria-label="A tabular representation of the data in the chart." style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;">
														<table>
															<thead>
																<tr>
																	<th>Bulan</th>
																	<th>Target</th>
																	<th>Realisasi</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td></td>
																	<td>0</td>
																	<td>0</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
											<div style="display: none; position: absolute; top: 410px; left: 939px; white-space: nowrap; font-family: Arial; font-size: 14px; font-weight: bold;"
											aria-hidden="true">0</div>
											<div></div>
										</div>
									</div>
								</div>
								<br>
								<div class="cleaner">&nbsp;</div>


							</div>
						</div>
						<div class="dropdown-divider"></div>
						<div class="share">
							<span class="read-more">
								<iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fbctemas.beacukai.go.id%2Ftentang-kami%2Fstruktur-organisasi%2F&amp;layout=button_count&amp;show_faces=false&amp;width=80&amp;action=like&amp;font=arial&amp;colorscheme=light&amp;height=21"
								scrolling="no" style="border:none; overflow:hidden; width:80px; height:21px;" allowtransparency="true" frameborder="0"></iframe>
								<iframe id="twitter-widget-0" scrolling="no" allowtransparency="true" class="twitter-share-button twitter-share-button-rendered twitter-tweet-button"
								style="position: static; visibility: visible; width: 61px; height: 20px;" title="Twitter Tweet Button" src="https://platform.twitter.com/widgets/tweet_button.0639d67d95b7680840758b6833f06d87.en.html#dnt=false&amp;id=twitter-widget-0&amp;lang=en&amp;original_referer=http%3A%2F%2Fbctemas.beacukai.go.id%2Ftentang-kami%2Fstruktur-organisasi%2F&amp;size=m&amp;text=STRUKTUR%20ORGANISASI%20-%20BEA%20CUKAI%20TANJUNG%20EMAS&amp;time=1566096611700&amp;type=share&amp;url=http%3A%2F%2Fbctemas.beacukai.go.id%2Ftentang-kami%2Fstruktur-organisasi%2F"
								data-url="http://bctemas.beacukai.go.id/tentang-kami/struktur-organisasi/" frameborder="0"></iframe>
							</span>
							<p id="title">SHARE THIS PAGE</p>
						</div>
						<div class="dropdown-divider"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
