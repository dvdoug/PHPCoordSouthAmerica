<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * South America/Venezuela - east of 66°W.
 * @internal
 */
class Extent3858
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [-61.776682281494, 10.090579605103], [-61.835857772827, 10.101249313354], [-61.839754486084, 10.101951217651], [-61.873611831665, 10.108054733276], [-61.983055496216, 10.146113967896], [-61.909536743164, 10.326945877075], [-61.836017990112, 10.507777786255], [-61.762499237061, 10.688613510132], [-61.70277633667, 10.688891983032], [-61.70277633667, 10.814445114136], [-61.671389007568, 10.89388999939], [-61.663055801392, 10.911391830444], [-61.631111526489, 11.004169082642], [-61.629444503784, 11.011111831665], [-61.629444503784, 11.143058395386], [-61.629444503784, 11.275001144409], [-61.629148864746, 11.460452651978], [-61.635294342041, 11.460834121704], [-61.881914520264, 11.474254226685], [-61.962879562378, 11.478549575806], [-62.088455581665, 11.502986526489], [-62.102119827271, 11.506171798706], [-62.114677810669, 11.509448623657], [-62.12585105896, 11.514003372192], [-62.191454315186, 11.541312789917], [-62.195227050781, 11.543006515503], [-62.267712020874, 11.695525741577], [-62.267973327637, 11.696086502075], [-62.36604347229, 11.894992446899], [-62.464113616943, 12.093902206421], [-62.467279815674, 12.100326156616], [-62.467993164062, 12.101775741577], [-62.468710327148, 12.103221511841], [-62.547047042847, 12.261008834839], [-62.625383758545, 12.418796157837], [-62.703720474243, 12.576583480835], [-62.817333602905, 12.773666000366], [-62.848833465576, 12.826083755493], [-62.942978286743, 12.980109786987], [-63.027153396606, 13.117858505249], [-63.147407913208, 13.314086532593], [-63.149883651733, 13.331599807739], [-63.172821426392, 13.498904800415], [-63.179710769653, 13.524165725708], [-63.278358840942, 13.732211685181], [-63.111000442505, 13.861323928833], [-62.951054000854, 13.988849258423], [-62.821365737915, 14.094760513306], [-62.713888549805, 14.180556869507], [-62.713888549805, 14.384585952759], [-62.713888549805, 14.588611221313], [-62.713888549805, 14.780742263794], [-62.713888549805, 14.972873306274], [-62.713888549805, 15.165000534058], [-62.713888549805, 15.359237289429], [-62.713888549805, 15.5534740448], [-62.713888549805, 15.747710800171], [-62.713888549805, 15.941943740845], [-62.791084671021, 16.110957717896], [-62.868280792236, 16.279971694946], [-62.945478820801, 16.448985671997], [-63.062528991699, 16.52816734314], [-63.179581069946, 16.607349014282], [-63.194034957886, 16.616958236694], [-63.342405700684, 16.715152359009], [-63.382421875, 16.733264541626], [-63.410536193848, 16.745826339722], [-63.529026412964, 16.780055618286], [-63.530554199219, 16.780555343628], [-63.924527740479, 16.812804794312], [-64.11849937439, 16.845054244995], [-64.135228729248, 16.840552902222], [-64.151954269409, 16.836051559448], [-64.168681716919, 16.831546401978], [-64.18540725708, 16.82703742981], [-64.202132797241, 16.822532272339], [-64.208222961426, 16.820891952515], [-64.215999221802, 16.817557907104], [-64.231748199463, 16.81050453186], [-64.234611129761, 16.809222793579], [-64.250211334229, 16.801875686646], [-64.265811538696, 16.794524765015], [-64.268222427368, 16.793391799927], [-64.283815002441, 16.786025619507], [-64.299407577515, 16.778663253784], [-64.314996337891, 16.771300888062], [-64.330587005615, 16.763934707642], [-64.346175765991, 16.756564712524], [-64.361762619019, 16.749198532104], [-64.377347564697, 16.741828536987], [-64.392932510376, 16.73445854187], [-64.408517456055, 16.727084732056], [-64.424098587036, 16.719714736938], [-64.439679718018, 16.712340927124], [-64.455260848999, 16.704963302612], [-64.470838165283, 16.697585678101], [-64.486415481567, 16.690211868286], [-64.49377784729, 16.686721420288], [-64.508988952637, 16.678664779663], [-64.524196243286, 16.670608139038], [-64.539403533936, 16.662547683716], [-64.554610824585, 16.654487228394], [-64.569816207886, 16.646426773071], [-64.585019683838, 16.638362503052], [-64.60022315979, 16.630298233032], [-64.615424728394, 16.622233963013], [-64.630624389648, 16.614169692993], [-64.645824050903, 16.606101608276], [-64.66102180481, 16.59803352356], [-64.676217651367, 16.589965438843], [-64.691413497925, 16.581893539429], [-64.706607437134, 16.573821640015], [-64.721799468994, 16.565749740601], [-64.736991500854, 16.557674026489], [-64.752181625366, 16.549598312378], [-64.767371749878, 16.541522598267], [-64.782558059692, 16.533446884155], [-64.797744369507, 16.525367355347], [-64.812930679321, 16.517287826538], [-64.828113174438, 16.509208297729], [-64.843295669556, 16.501128768921], [-64.858478164673, 16.493045425415], [-64.864610290527, 16.489780044556], [-64.879340744019, 16.480952835083], [-64.894067382812, 16.47212562561], [-64.908795928955, 16.463298416138], [-64.9235206604, 16.454467391968], [-64.938243484497, 16.445636367798], [-64.952966308594, 16.436805343628], [-64.967687225342, 16.427974319458], [-64.98240814209, 16.419139480591], [-64.997127151489, 16.410304641724], [-65.01184425354, 16.401469802856], [-65.026561355591, 16.392631149292], [-65.041276550293, 16.383796310425], [-65.055989837646, 16.37495765686], [-65.070701217651, 16.366115188599], [-65.085412597656, 16.357276535034], [-65.100122070312, 16.348434066772], [-65.11482963562, 16.339591598511], [-65.129537200928, 16.330745315552], [-65.144242858887, 16.32190284729], [-65.158946609497, 16.313056564331], [-65.173650360107, 16.304210281372], [-65.188352203369, 16.295360183716], [-65.203052139282, 16.286513900757], [-65.217750167847, 16.277663803101], [-65.232448196411, 16.268813705444], [-65.247146224976, 16.259959793091], [-65.261840438843, 16.251105880737], [-65.27653465271, 16.242251968384], [-65.291226959229, 16.23339805603], [-65.305917358398, 16.224540328979], [-65.320607757568, 16.215682601929], [-65.33529624939, 16.206824874878], [-65.349984741211, 16.197967147827], [-65.364669418335, 16.189105606079], [-65.379356002808, 16.180244064331], [-65.394038772583, 16.171382522583], [-65.40871963501, 16.162520980835], [-65.423400497437, 16.15365562439], [-65.438081359863, 16.144790267944], [-65.452758407593, 16.135924911499], [-65.467435455322, 16.127055740356], [-65.482110595703, 16.118186569214], [-65.496785736084, 16.109317398071], [-65.511458969116, 16.100448226929], [-65.5261302948, 16.091575241089], [-65.540801620483, 16.082706069946], [-65.55546913147, 16.073833084106], [-65.570138549805, 16.064956283569], [-65.584804153442, 16.056083297729], [-65.59946975708, 16.047206497192], [-65.614133453369, 16.038329696655], [-65.62879524231, 16.029449081421], [-65.643458938599, 16.020572280884], [-65.65811882019, 16.011691665649], [-65.672776794434, 16.002807235718], [-65.687434768677, 15.993926620483], [-65.702090835571, 15.985042190552], [-65.716746902466, 15.97615776062], [-65.731399154663, 15.967273330688], [-65.74605140686, 15.958388900757], [-65.760703659058, 15.949500656128], [-65.775354003906, 15.940612411499], [-65.790000534058, 15.931720352173], [-65.804648971558, 15.922832107544], [-65.81929359436, 15.913940048218], [-65.833938217163, 15.905047988892], [-65.848582839966, 15.896155929565], [-65.86322555542, 15.887260055542], [-65.877866363525, 15.878364181519], [-65.892505264282, 15.869468307495], [-65.90714225769, 15.860572433472], [-65.921781158447, 15.851672744751], [-65.936416244507, 15.84277305603], [-65.951051330566, 15.83387336731], [-65.965684509277, 15.824973678589], [-65.98031578064, 15.816070175171], [-65.994947052002, 15.807166671753], [-66.009576416016, 15.798263168335], [-66.024203872681, 15.78935585022], [-66.038831329346, 15.780452346802], [-66.053456878662, 15.771541213989], [-66.06808052063, 15.762633895874], [-66.077693557739, 15.756778335571], [-66.089091873169, 15.744201278687], [-66.1, 15.732165908813], [-66.1, 15.485423660278], [-66.1, 15.238681411743], [-66.1, 14.991939163208], [-66.1, 14.745196914673], [-66.1, 14.498454666138], [-66.1, 14.251712417603], [-66.1, 14.00496635437], [-66.1, 13.758224105835], [-66.1, 13.5114818573], [-66.1, 13.264739608765], [-66.1, 13.017997360229], [-66.1, 12.771255111694], [-66.1, 12.524512863159], [-66.1, 12.277766799927], [-66.1, 12.031024551392], [-66.1, 11.784282302856], [-66.1, 11.537540054321], [-66.1, 11.290797805786], [-66.1, 11.044055557251], [-66.1, 10.797313308716], [-66.1, 10.550571060181], [-66.1, 10.305644607544], [-66.1, 10.060718154907], [-66.1, 9.8157955169678], [-66.1, 9.5708690643311], [-66.1, 9.3259464263916], [-66.1, 9.0810199737549], [-66.1, 8.6360973358154], [-66.1, 8.3911708831787], [-66.1, 8.146244430542], [-66.1, 7.9013217926025], [-66.1, 7.6563953399658], [-66.1, 7.4114727020264], [-66.1, 7.2197803497314], [-66.1, 7.0280879974365], [-66.1, 6.8363994598389], [-66.1, 6.6447071075439], [-66.1, 6.3965877532959], [-66.1, 6.1484645843506], [-66.1, 5.9003452301025], [-66.1, 5.6522258758545], [-66.1, 5.4041065216064], [-66.1, 5.1559833526611], [-66.1, 4.9078639984131], [-66.1, 4.659744644165], [-66.1, 4.4116214752197], [-66.1, 4.1635021209717], [-66.1, 3.9153827667236], [-66.1, 3.6672595977783], [-66.1, 3.4191402435303], [-66.1, 3.1710208892822], [-66.1, 2.9228977203369], [-66.1, 2.6747783660889], [-66.1, 2.4266590118408], [-66.1, 2.1785396575928], [-66.1, 1.9304164886475], [-66.1, 1.6822971343994], [-66.1, 1.4341777801514], [-66.1, 1.1860546112061], [-66.1, 0.93793525695801], [-66.1, 0.68981590270996], [-66.079591369629, 0.69874992370605], [-66.055146789551, 0.71833457946777], [-66.029039001465, 0.75402870178223], [-66.012780761719, 0.77180519104004], [-65.970834350586, 0.80833473205566], [-65.835290527344, 0.88277854919434], [-65.7572265625, 0.88972129821777], [-65.695428466797, 0.89041938781738], [-65.659448242187, 0.87111320495605], [-65.639733886719, 0.85000267028809], [-65.622094726562, 0.82694664001465], [-65.610139465332, 0.80194511413574], [-65.606950378418, 0.77180519104004], [-65.611116027832, 0.73888816833496], [-65.627374267578, 0.70666923522949], [-65.667504882812, 0.66472282409668], [-65.682572937012, 0.62979164123535], [-65.675561523437, 0.59639015197754], [-65.658616638184, 0.56611289978027], [-65.642366027832, 0.55166664123535], [-65.621667480469, 0.54916801452637], [-65.585771179199, 0.56187477111816], [-65.536111450195, 0.59528007507324], [-65.500283813477, 0.65395774841309], [-65.498345947266, 0.68903007507324], [-65.495011901855, 0.71861305236816], [-65.485841369629, 0.73708381652832], [-65.421670532227, 0.81194343566895], [-65.391465759277, 0.82659950256348], [-65.353059387207, 0.8152774810791], [-65.327645874023, 0.81499900817871], [-65.292504882812, 0.82666816711426], [-65.273889160156, 0.85000267028809], [-65.26584777832, 0.86944618225098], [-65.260842895508, 0.88902702331543], [-65.254449462891, 0.93528022766113], [-65.253900146484, 0.95555534362793], [-65.246530151367, 0.9976390838623], [-65.236260986328, 1.0184749603271], [-65.203889465332, 1.0420841217041], [-65.106958007812, 1.0658344268799], [-65.043069458008, 1.1105579376221], [-64.919068908691, 1.1794780731201], [-64.883065795898, 1.1600002288818], [-64.857232666016, 1.1443065643311], [-64.831742858887, 1.1469463348389], [-64.797509765625, 1.1627773284912], [-64.695291137695, 1.2299999237061], [-64.678964233398, 1.2497905731201], [-64.663201904297, 1.2913898468018], [-64.649034118652, 1.3151401519775], [-64.629731750488, 1.3336109161377], [-64.494309997559, 1.4118045806885], [-64.465768432617, 1.4075702667236], [-64.364450073242, 1.376110458374], [-64.213204956055, 1.4829181671143], [-64.177987670898, 1.5354160308838], [-64.162782287598, 1.5811122894287], [-64.149865722656, 1.7068065643311], [-64.152368164062, 1.7408336639404], [-64.151887512207, 1.7904857635498], [-64.130143737793, 1.8247226715088], [-64.102365112305, 1.8498615264893], [-64.070558166504, 1.8672222137451], [-64.036531066895, 1.8768047332764], [-63.925004577637, 1.8777774810791], [-63.63917388916, 1.9030574798584], [-63.618612670898, 1.9236110687256], [-63.507086181641, 2.0059741973877], [-63.445417785645, 2.0299991607666], [-63.388334655762, 2.0305561065674], [-63.299448394775, 2.0495151519775], [-63.280004882812, 2.1291660308838], [-63.260767364502, 2.1590999603271], [-63.246389770508, 2.3061107635498], [-63.265421295166, 2.3200000762939], [-63.481672668457, 2.3347248077393], [-63.882203674316, 2.3271640777588], [-63.921807861328, 2.3258327484131], [-64.134034729004, 2.3713191986084], [-64.146463012695, 2.4094432830811], [-64.131257629395, 2.4497226715088], [-64.117227172852, 2.4738887786865], [-64.095418548584, 2.5230564117432], [-64.087850189209, 2.6186107635498], [-64.134729003906, 2.7327770233154], [-64.188897705078, 2.8408359527588], [-64.246118164062, 2.9397243499756], [-64.258889770508, 2.9608348846436], [-64.305291748047, 3.0933345794678], [-64.326669311523, 3.2374996185303], [-64.335702514648, 3.3327793121338], [-64.324380493164, 3.3669437408447], [-64.293481445312, 3.4013904571533], [-64.284722900391, 3.4277767181396], [-64.282373046875, 3.4493068695068], [-64.290216064453, 3.4896549224854], [-64.408059692383, 3.6183361053467], [-64.465844726562, 3.6505550384521], [-64.505288696289, 3.6672214508057], [-64.546327209473, 3.687015914917], [-64.61806640625, 3.7544445037842], [-64.726678466797, 3.86555519104], [-64.74208984375, 3.8843044281006], [-64.760980224609, 3.9166683197021], [-64.794458007812, 3.9819454193115], [-64.804727172852, 4.0186122894287], [-64.813134765625, 4.0440296173096], [-64.833894348145, 4.0612491607666], [-64.885911560059, 4.0858348846436], [-64.901956176758, 4.1108325958252], [-64.900010681152, 4.1650699615479], [-64.881669616699, 4.1863903045654], [-64.84626159668, 4.1872219085693], [-64.824174499512, 4.1813892364502], [-64.793069458008, 4.1672214508057], [-64.774728393555, 4.1575016021729], [-64.751954650879, 4.1391681671143], [-64.742150878906, 4.1237720489502], [-64.707788085937, 4.0452770233154], [-64.692018127441, 4.027779006958], [-64.652925109863, 4.0223621368408], [-64.567514038086, 4.0338901519775], [-64.530282592773, 4.0400012969971], [-64.502236938477, 4.0491680145264], [-64.479867553711, 4.0536121368408], [-64.435556030273, 4.0541690826416], [-64.348901367187, 4.0480541229248], [-64.321115112305, 4.0411113739014], [-64.226388549805, 4.009582901001], [-64.208894348145, 3.9827770233154], [-64.187783813477, 3.9327777862549], [-64.164590454102, 3.8552783966064], [-64.152711486816, 3.8084377288818], [-64.117791748047, 3.7861103057861], [-64.094167327881, 3.7829174041748], [-64.056253051758, 3.7912525177002], [-64.040559387207, 3.8045848846436], [-64.009030914307, 3.8330577850342], [-63.94806060791, 3.858890914917], [-63.544451141357, 3.8486103057861], [-63.514170074463, 3.844860458374], [-63.489172363281, 3.8283351898193], [-63.473616027832, 3.8097232818604], [-63.447920227051, 3.7806934356689], [-63.430139923096, 3.767223739624], [-63.39153137207, 3.7577785491943], [-63.358198547363, 3.7664608001709], [-63.345556640625, 3.7902797698975], [-63.338751220703, 3.8151401519775], [-63.333616638184, 3.8416675567627], [-63.319101715088, 3.8670848846436], [-63.282507324219, 3.8708347320557], [-63.259451293945, 3.8658336639404], [-63.235556030273, 3.8580554962158], [-63.193964385986, 3.8393749237061], [-63.142294311523, 3.7981266021729], [-63.064169311523, 3.6952785491943], [-62.977365875244, 3.5997928619385], [-62.890562438965, 3.5043071746826], [-62.823614501953, 3.4672245025635], [-62.803060913086, 3.4629177093506], [-62.77805557251, 3.4601406097412], [-62.681253814697, 3.5043071746826], [-62.651396179199, 3.538334274292], [-62.634031677246, 3.5765270233154], [-62.627226257324, 3.6052783966064], [-62.627500915527, 3.6311115264893], [-62.640142822266, 3.6905559539795], [-62.658338928223, 3.7347225189209], [-62.677225494385, 3.7825016021729], [-62.680418395996, 3.8087505340576], [-62.657778167725, 3.9202770233154], [-62.628340148926, 3.938610458374], [-62.569864654541, 3.9468044281006], [-62.504167938232, 3.9419445037842], [-62.439932250977, 4.0122913360596], [-62.340139770508, 4.0826725006104], [-62.292227172852, 4.0794452667236], [-62.221113586426, 4.0524982452393], [-62.181394958496, 4.0361103057861], [-62.162504577637, 4.0272220611572], [-62.120840454102, 4.0125011444092], [-62.080976867676, 3.9995845794678], [-62.042642974854, 3.9931949615479], [-62.004793548584, 4.0038913726807], [-61.97931137085, 4.0248607635498], [-61.953195953369, 4.0501407623291], [-61.887503051758, 4.069584274292], [-61.852014923096, 4.0568050384521], [-61.814863586426, 4.0469440460205], [-61.748892211914, 4.0605548858643], [-61.711531066895, 4.0848621368408], [-61.690561676025, 4.1156963348389], [-61.662920379639, 4.1430553436279], [-61.599172973633, 4.1590274810791], [-61.562780761719, 4.155277633667], [-61.5252784729, 4.1442378997803], [-61.454378509521, 4.1488193511963], [-61.424032592773, 4.1748622894287], [-61.410696411133, 4.2034725189209], [-61.40736618042, 4.2273601531982], [-61.412783050537, 4.2619441986084], [-61.40736618042, 4.2905544281006], [-61.392225646973, 4.3063892364502], [-61.213613891602, 4.4066661834717], [-61.06389465332, 4.3943065643311], [-60.952505493164, 4.407776260376], [-60.887087249756, 4.41930809021], [-60.868338012695, 4.4383358001709], [-60.851667785645, 4.4569438934326], [-60.829862976074, 4.4918750762939], [-60.824583435059, 4.5377086639404], [-60.786531829834, 4.6097225189209], [-60.766809844971, 4.6133350372314], [-60.73861541748, 4.6184734344482], [-60.620279693604, 4.6761096954346], [-60.575559997559, 4.7138904571533], [-60.549311065674, 4.7429164886475], [-60.492506408691, 4.8247226715088], [-60.478544616699, 4.8526386260986], [-60.482366943359, 4.8884738922119], [-60.544172668457, 5.0586093902588], [-60.546772384644, 5.0639614105225], [-60.555212402344, 5.0813182830811], [-60.58514251709, 5.0969432830811], [-60.610975646973, 5.102917098999], [-60.630369567871, 5.104797744751], [-60.648893737793, 5.1225017547607], [-60.681112670898, 5.1583332061768], [-60.760282897949, 5.2480548858643], [-60.88819732666, 5.3913883209229], [-61.016111755371, 5.5347217559814], [-61.152918243408, 5.6873630523682], [-61.289724731445, 5.8400005340576], [-61.27345123291, 5.8609699249268], [-61.237894439697, 5.8727802276611], [-61.223059082031, 5.8925022125244], [-61.182821655273, 5.9563373565674], [-61.170278930664, 5.986389541626], [-61.162783050537, 6.0077785491943], [-61.060144805908, 6.0825008392334], [-61.038618469238, 6.199165725708], [-61.040007019043, 6.3086093902588], [-61.096529388428, 6.4336818695068], [-61.104727172852, 6.477917098999], [-61.074449920654, 6.5587505340576], [-61.025106811523, 6.6147769927979], [-60.954725646973, 6.6288875579834], [-60.935976409912, 6.6197246551514], [-60.839655303955, 6.6245845794678], [-60.79368057251, 6.6650012969971], [-60.716116333008, 6.6883358001709], [-60.619169616699, 6.6590274810791], [-60.597784423828, 6.6666683197021], [-60.576391601562, 6.6899990081787], [-60.565000915527, 6.7075008392334], [-60.53777923584, 6.7349323272705], [-60.490835571289, 6.7508358001709], [-60.426947021484, 6.7747234344482], [-60.398893737793, 6.7877773284912], [-60.36361541748, 6.8066677093506], [-60.308340454102, 6.8475002288818], [-60.19125213623, 6.9565967559814], [-60.181394958496, 6.9900020599365], [-60.178057098389, 7.0187496185303], [-60.209032440186, 7.0434726715088], [-60.236669921875, 7.0552791595459], [-60.260488891602, 7.076248550415], [-60.356115722656, 7.0958332061768], [-60.405767822266, 7.0727085113525], [-60.414999389648, 7.0429882049561], [-60.438059234619, 7.0244449615479], [-60.517500305176, 7.0944446563721], [-60.530836486816, 7.12194480896], [-60.53423538208, 7.1543048858643], [-60.518614196777, 7.184029006958], [-60.495352172852, 7.2061122894287], [-60.49139251709, 7.236389541626], [-60.510000610352, 7.2819446563721], [-60.560835266113, 7.3472217559814], [-60.58826675415, 7.3534740447998], [-60.614031219482, 7.4009746551514], [-60.616667175293, 7.4399990081787], [-60.591112518311, 7.4670833587646], [-60.562090301514, 7.4665302276611], [-60.488752746582, 7.5393070220947], [-60.474584960937, 7.6152080535889], [-60.433336639404, 7.7038883209229], [-60.413198852539, 7.7181934356689], [-60.219725036621, 7.7775005340576], [-60.157545471191, 7.8215717315674], [-60.137228393555, 7.8463901519775], [-60.024866485596, 7.9283336639404], [-59.993612670898, 7.9412502288818], [-59.937780761719, 7.937015914917], [-59.911184692383, 7.9592365264893], [-59.887018585205, 8.0469783782959], [-59.879724884033, 8.0748600006104], [-59.846182250977, 8.0999950408936], [-59.822225952148, 8.1111110687256], [-59.788893127441, 8.1186107635498], [-59.732851409912, 8.1315273284912], [-59.703058624268, 8.1833347320557], [-59.712088012695, 8.2061122894287], [-59.786116027832, 8.3008350372314], [-59.881117248535, 8.41833152771], [-59.890280151367, 8.4352764129639], [-59.863581085205, 8.4590152740479], [-59.855438613892, 8.470348739624], [-59.832521820068, 8.5022319793701], [-59.711483383179, 8.6561054229736], [-59.590444946289, 9.0099750518799], [-59.469406509399, 9.1638484954834], [-59.392528915405, 9.2606349945068], [-59.377449417114, 9.2883029937744], [-59.267288589478, 9.4896312713623], [-59.157129669189, 9.6909633636475], [-59.046968841553, 9.8922916412354], [-58.957041168213, 10.05704460144], [-58.952745819092, 10.064818954468], [-58.944012069702, 10.080558395386], [-58.854944610596, 10.242316818237], [-59.09683265686, 10.199168777466], [-59.338722610474, 10.156020736694], [-59.580610656738, 10.112872695923], [-59.822498703003, 10.069724655151], [-59.887777709961, 10.054721450806], [-60.027498626709, 10.022639846802], [-60.167221450806, 9.9905544281006], [-60.36569442749, 9.9612499237061], [-60.564165496826, 9.9319454193115], [-60.790832901001, 9.948611831665], [-60.957083129883, 9.9622226715088], [-61.123333358765, 9.9758335113525], [-61.261665725708, 10.022918319702], [-61.4, 10.069999313354], [-61.530554199219, 10.086669540405], [-61.754999542236, 10.086669540405], [-61.776682281494, 10.090579605103],
                ],
            ],
        ];
    }
}
