<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * South America/Brazil - 48°W to 42°W and Aratu.
 * @internal
 */
class Extent1573
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [-42.994169616699, -22.85333480835], [-43.025419616699, -22.831041717529], [-43.029447937012, -22.790556335449], [-42.99167098999, -22.728058242798], [-42.963613891602, -22.702780151367], [-42.926531219482, -22.643196487427], [-42.920561218262, -22.61639251709], [-42.92611541748, -22.579306030273], [-42.975836181641, -22.568334960937], [-43.15431060791, -22.636598968506], [-43.171255493164, -22.677641296387], [-43.162222290039, -22.706667327881], [-43.151670837402, -22.724861526489], [-43.129518890381, -22.735626602173], [-43.063333892822, -22.79444732666], [-43.047434234619, -22.851807022095], [-43.08514251709, -22.882780456543], [-43.127226257324, -22.899031066895], [-43.189451599121, -22.91305770874], [-43.233618164062, -22.91000213623], [-43.290281677246, -22.911112213135], [-43.415003204346, -22.928612136841], [-43.539724731445, -22.946112060547], [-43.67264213562, -22.960277938843], [-43.805559539795, -22.974445724487], [-43.844450378418, -22.982778930664], [-43.876951599121, -22.994169616699], [-43.896948242187, -23.003057861328], [-43.905279541016, -22.999863052368], [-43.906393432617, -22.977503204346], [-43.901113891602, -22.95708694458], [-43.877088928223, -22.940903091431], [-43.794729614258, -22.950834655762], [-43.716116333008, -22.954168701172], [-43.693334960937, -22.955000305176], [-43.67278137207, -22.953890228271], [-43.604723358154, -22.945419692993], [-43.50680770874, -22.918888473511], [-43.668890380859, -22.826670074463], [-43.758753204346, -22.796806716919], [-43.938612365723, -22.836946868896], [-43.975698852539, -22.886808776855], [-43.992224121094, -22.906807327271], [-44.025839233398, -22.932085418701], [-44.091947937012, -22.951113128662], [-44.136705780029, -22.948299789429], [-44.223059082031, -22.820698165894], [-44.25375213623, -22.820417785645], [-44.311529541016, -22.845280075073], [-44.330351257324, -22.863335037231], [-44.373335266113, -22.908056640625], [-44.433615112305, -22.927778625488], [-44.502779388428, -22.940555953979], [-44.545561218262, -22.943334960937], [-44.575212860107, -22.955696487427], [-44.59694519043, -23.009447479248], [-44.614866638184, -23.10041847229], [-44.609308624268, -23.12222328186], [-44.543058776855, -23.128614807129], [-44.46909942627, -23.130070114136], [-44.40076675415, -23.189585113525], [-44.474306488037, -23.25368347168], [-44.500833892822, -23.25638999939], [-44.534727478027, -23.243336105347], [-44.617571258545, -23.246668243408], [-44.625646972656, -23.25327911377], [-44.629793548584, -23.264862442017], [-44.738199615478, -23.289722824097], [-44.751322174072, -23.272501373291], [-44.80645980835, -23.241251373291], [-44.843893432617, -23.262224578857], [-44.901396179199, -23.306669616699], [-44.92889251709, -23.345278167725], [-44.911390686035, -23.358242416382], [-44.960005187988, -23.396112823486], [-44.992224121094, -23.410559082031], [-45.166395568848, -23.487501525879], [-45.310835266113, -23.528890991211], [-45.328890228271, -23.555071258545], [-45.326601409912, -23.611389541626], [-45.302778625488, -23.654447937012], [-45.294725799561, -23.703127288818], [-45.31548538208, -23.728056335449], [-45.405004882812, -23.743336105347], [-45.430975341797, -23.726391220093], [-45.649728393555, -23.705557250977], [-45.735284423828, -23.688333892822], [-45.766389465332, -23.683058166504], [-45.935006713867, -23.658890151977], [-45.990007019043, -23.667780303955], [-46.019170379639, -23.674723052979], [-46.074864959717, -23.687641525269], [-46.185838317871, -23.736112976074], [-46.229447937012, -23.758333587646], [-46.326947784424, -23.819099807739], [-46.286389923096, -23.816528701782], [-46.25055847168, -23.778820419312], [-46.217710113525, -23.76590385437], [-46.265840148926, -23.86028137207], [-46.295556640625, -23.892225646973], [-46.379724121094, -23.925835037231], [-46.411668395996, -23.918890380859], [-46.40020904541, -23.900904083252], [-46.374795532227, -23.89104309082], [-46.382615661621, -23.862112426758], [-46.405488586426, -23.819099807739], [-46.480420684814, -23.768751525879], [-46.533616638184, -23.841251754761], [-46.516809082031, -23.885696792602], [-46.536111450195, -23.921389007568], [-46.577783203125, -23.937780761719], [-46.691949462891, -23.992224121094], [-46.807504272461, -24.051947021484], [-46.923059082031, -24.111669921875], [-46.941949462891, -24.121668243408], [-47.001672363281, -24.156946563721], [-47.024446105957, -24.170835876465], [-47.050836181641, -24.188059234619], [-47.072229003906, -24.203611755371], [-47.085347747803, -24.219097518921], [-47.105489349365, -24.286945724487], [-47.210109329224, -24.37500038147], [-47.314729309082, -24.463056945801], [-47.417504882813, -24.522222900391], [-47.522782897949, -24.577501678467], [-47.584451293945, -24.594446563721], [-47.645562744141, -24.608614349365], [-47.696672058105, -24.638056182861], [-47.816667175293, -24.722780609131], [-47.898057556152, -24.773336791992], [-47.933892822266, -24.796114349365], [-48.083062744141, -24.910280609131], [-48.100005722046, -24.912138366699], [-48.1, -24.975201034546], [-48.096673583984, -24.976667785645], [-48.054586029053, -24.980070495605], [-48.020421600342, -24.965280914307], [-47.994863128662, -24.959028625488], [-47.995004272461, -25.003614807129], [-48.014306640625, -25.052362823486], [-48.035005187988, -25.080000305176], [-48.052503204346, -25.099445724487], [-48.084516143799, -25.117779159546], [-48.1, -25.122909927368], [-48.100095367432, -25.366186523437], [-48.100190734863, -25.609465026855], [-48.100288009644, -25.852743530273], [-48.100383377075, -26.096020126343], [-48.100478744507, -26.339298629761], [-48.100576019287, -26.58257522583], [-48.100671386719, -27.025853729248], [-48.10076675415, -27.269130325317], [-48.100864028931, -27.512408828735], [-48.100959396362, -27.755687332153], [-48.101054763794, -27.998963928223], [-48.101150131226, -28.242242431641], [-48.101247406006, -28.48551902771], [-48.101342773437, -28.728797531128], [-48.101438140869, -28.972076034546], [-48.101535415649, -29.215352630615], [-48.101630783081, -29.458631134033], [-48.101726150513, -29.701907730103], [-48.101823425293, -29.945186233521], [-48.101918792725, -30.18846282959], [-48.102014160156, -30.431741333008], [-48.102111434937, -30.675019836426], [-48.102206802368, -30.918296432495], [-48.1023021698, -31.161574935913], [-48.102397537231, -31.404851531982], [-48.102494812012, -31.6481300354], [-48.102590179443, -31.89140663147], [-48.102685546875, -32.134685134888], [-48.102782821655, -32.377963638306], [-48.102878189087, -32.621240234375], [-48.102973556519, -32.864518737793], [-48.103070831299, -33.107795333862], [-48.10316619873, -33.35107383728], [-48.103261566162, -33.594352340698], [-48.096572494507, -33.588973617554], [-48.089198684692, -33.580541229248], [-48.081653213501, -33.574473953247], [-48.064918136597, -33.555326080322], [-48.051803207397, -33.544770812988], [-48.043803787231, -33.535609817505], [-48.039851760864, -33.532430267334], [-48.035009002686, -33.526881790161], [-48.032909011841, -33.525189971924], [-48.030927276611, -33.522920227051], [-48.028928375244, -33.521310424805], [-48.027574157715, -33.519759750366], [-48.02594909668, -33.518451309204], [-48.025592422485, -33.518043136597], [-48.023938751221, -33.516709899902], [-48.021960830688, -33.514442062378], [-48.019958114624, -33.512830352783], [-48.011039352417, -33.502606964111], [-48.00905380249, -33.501006698608], [-47.979571914673, -33.467195129395], [-47.979325866699, -33.466998672485], [-47.973361587524, -33.460155105591], [-47.971353149414, -33.458535766602], [-47.835252380371, -33.301375961304], [-47.699151611328, -33.144216156006], [-47.563050842285, -32.987056350708], [-47.560414886475, -32.982501602173], [-47.559177017212, -32.981063461304], [-47.558457946777, -32.979823684692], [-47.540574645996, -32.959035491943], [-47.540116882324, -32.958243942261], [-47.538606262207, -32.956489181518], [-47.53293762207, -32.946687316894], [-47.531854248047, -32.945426559448], [-47.528998947143, -32.940486526489], [-47.528972244263, -32.940456008911], [-47.528333282471, -32.939351654053], [-47.527007675171, -32.937810516357], [-47.520663833618, -32.926835632324], [-47.519279098511, -32.925223922729], [-47.513688659668, -32.915549850464], [-47.512494659424, -32.914161300659], [-47.509646987915, -32.909230804443], [-47.50961265564, -32.909190750122], [-47.50891456604, -32.907985305786], [-47.507678604126, -32.906545257568], [-47.506711578369, -32.904870605469], [-47.503776168823, -32.901452636719], [-47.502912139893, -32.899959182739], [-47.502803421021, -32.899831390381], [-47.484323120117, -32.867824172974], [-47.483497238159, -32.866862869263], [-47.47933921814, -32.859654998779], [-47.476718521118, -32.856603240967], [-47.476392364502, -32.856038665771], [-47.474778747559, -32.85415802002], [-47.470267868042, -32.846337890625], [-47.468963241577, -32.844817733765], [-47.468011474609, -32.843169784546], [-47.465058898926, -32.839727020264], [-47.462018585205, -32.834455108643], [-47.459218597412, -32.831189727783], [-47.45439491272, -32.82282409668], [-47.451461410522, -32.819404220581], [-47.445518112183, -32.809091186523], [-47.439805603027, -32.802428817749], [-47.436360931396, -32.796449279785], [-47.434959030151, -32.794812774658], [-47.431516265869, -32.788837051392], [-47.430112457275, -32.787196731567], [-47.428838348389, -32.784984207153], [-47.421306228638, -32.776195144653], [-47.42036781311, -32.774564361572], [-47.417403793335, -32.771102523804], [-47.416905975342, -32.770238494873], [-47.415467834473, -32.768558120728], [-47.408088302612, -32.755740737915], [-47.400874710083, -32.747314071655], [-47.399520492554, -32.744962310791], [-47.397966003418, -32.743144607544], [-47.397534942627, -32.742395019531], [-47.395997619629, -32.740600204468], [-47.392570114136, -32.734641647339], [-47.391149139404, -32.732984161377], [-47.390658950806, -32.732125854492], [-47.389213180542, -32.730439758301], [-47.388780212402, -32.729686355591], [-47.387246704102, -32.727893447876], [-47.386680221558, -32.726909255981], [-47.382379150391, -32.721881484985], [-47.380490875244, -32.71859703064], [-47.380437469482, -32.718535995483], [-47.378545379639, -32.715245819092], [-47.378495788574, -32.715186691284], [-47.377080535889, -32.712724304199], [-47.37265548706, -32.707551574707], [-47.371129608154, -32.704894638061], [-47.369748687744, -32.703282928467], [-47.368898010254, -32.70179901123], [-47.36877784729, -32.70165977478], [-47.367850875854, -32.700048065186], [-47.361911392212, -32.693099594116], [-47.36099395752, -32.691505050659], [-47.358007049561, -32.688010787964], [-47.356664276123, -32.685674285889], [-47.355098342896, -32.683841323852], [-47.353755569458, -32.681504821777], [-47.349227523804, -32.676206207275], [-47.348737335205, -32.675353622436], [-47.347289657593, -32.673659896851], [-47.336066818237, -32.654111480713], [-47.334739303589, -32.652558898926], [-47.329228973389, -32.642953491211], [-47.32798538208, -32.641498184204], [-47.322661972046, -32.632218933105], [-47.318263626099, -32.627069091797], [-47.310300445557, -32.61318359375], [-47.29976234436, -32.600833511353], [-47.298865890503, -32.599269485474], [-47.295858001709, -32.5957447052], [-47.291223144531, -32.587657546997], [-47.286155319214, -32.581716156006], [-47.284598922729, -32.578998184204], [-47.282231903076, -32.576224899292], [-47.281327819824, -32.574643707275], [-47.2812915802, -32.574601745605], [-47.27840385437, -32.56955871582], [-47.278379058838, -32.569532012939], [-47.27772102356, -32.568381881714], [-47.276446914673, -32.566886520386], [-47.276210403442, -32.566474533081], [-47.274474716186, -32.564441299438], [-47.263177490234, -32.544705963135], [-47.261926269531, -32.543241119385], [-47.257669067383, -32.53579864502], [-47.256137466431, -32.534001922607], [-47.254706954956, -32.53150138855], [-47.253200149536, -32.529733276367], [-47.252725219727, -32.528903579712], [-47.251264190674, -32.527188873291], [-47.247439956665, -32.520503616333], [-47.244479751587, -32.517026519775], [-47.244071578979, -32.516316986084], [-47.242511367798, -32.514484024048], [-47.239261245727, -32.508803939819], [-47.231795883179, -32.500033950806], [-47.230958557129, -32.498571014404], [-47.230823135376, -32.498410797119], [-47.229945755005, -32.49687538147], [-47.226918792725, -32.493320083618], [-47.225028610229, -32.490012741089], [-47.222045516968, -32.486507034302], [-47.21768913269, -32.478887176514], [-47.216226196289, -32.477168655395], [-47.214482879639, -32.474114990234], [-47.208417510986, -32.466987228394], [-47.206506347656, -32.463641738892], [-47.206101989746, -32.462934112549], [-47.204539871216, -32.461095428467], [-47.203242874145, -32.458823776245], [-47.201629257202, -32.456927871704], [-47.201194381714, -32.456164932251], [-47.196729278564, -32.450915908813], [-47.196475601196, -32.450469589233], [-47.191827392578, -32.4450050354], [-47.191390609741, -32.444240188599], [-47.18692741394, -32.438991165161], [-47.184741592407, -32.435161209106], [-47.177182769775, -32.426267242432], [-47.176349258423, -32.424810028076], [-47.176208114624, -32.424644088745], [-47.175630187988, -32.423629379272], [-47.174245452881, -32.421998596191], [-47.173961257935, -32.421500778198], [-47.172305679321, -32.419553375244], [-47.1696144104, -32.414836502075], [-47.160562133789, -32.404182052612], [-47.159671401978, -32.402618026733], [-47.159621810913, -32.402558898926], [-47.159045791626, -32.40154800415], [-47.157657241821, -32.399915313721], [-47.153089141846, -32.391904449463], [-47.152829742432, -32.391599273682], [-47.149345016479, -32.385486221313], [-47.147985076904, -32.383884048462], [-47.144250488281, -32.377334213257], [-47.144130325317, -32.377191162109], [-47.132121658325, -32.356114959717], [-47.130639648438, -32.354367828369], [-47.130355453491, -32.353868103027], [-47.129655456543, -32.353046035767], [-47.129546737671, -32.352855300903], [-47.128671264648, -32.351821517944], [-47.126777267456, -32.348497009277], [-47.12675819397, -32.348476028442], [-47.027677154541, -32.173472976685], [-46.928596115112, -31.998469924927], [-46.829516983032, -31.823466873169], [-46.828826522827, -31.821370697021], [-46.828584289551, -31.820941543579], [-46.828567123413, -31.820888137817], [-46.827626800537, -31.819217300415], [-46.826943969727, -31.817144012451], [-46.824805831909, -31.813342666626], [-46.824788665771, -31.81329498291], [-46.823846435547, -31.811618423462], [-46.823829269409, -31.811570739746], [-46.822887039185, -31.809894180298], [-46.822871780396, -31.809846496582], [-46.821927642822, -31.808169937134], [-46.821315383911, -31.806308364868], [-46.818143463135, -31.800672149658], [-46.818137741089, -31.800651168823], [-46.815295791626, -31.795596694946], [-46.815280532837, -31.795550918579], [-46.814336395264, -31.793874359131], [-46.814277267456, -31.793696975708], [-46.813407516479, -31.792150115967], [-46.812718963623, -31.790052032471], [-46.812476730347, -31.789622879028], [-46.811856842041, -31.787734603882], [-46.810582733154, -31.785472488403], [-46.781228637695, -31.696132278442], [-46.774631118774, -31.684383010864], [-46.773988342285, -31.682424163818], [-46.773727035522, -31.681958770752], [-46.773629760742, -31.681663131714], [-46.772771453857, -31.68013343811], [-46.772172546387, -31.67830619812], [-46.771836853027, -31.677709197998], [-46.771823501587, -31.677672958374], [-46.770877456665, -31.675984954834], [-46.768170928955, -31.667737579346], [-46.766219711304, -31.664258575439], [-46.758563613892, -31.640912628174], [-46.757955169678, -31.63982925415], [-46.757230377197, -31.637616729736], [-46.757054901123, -31.63730392456], [-46.753615951538, -31.626809692383], [-46.753387069702, -31.626401519775], [-46.753377532959, -31.626371002197], [-46.75242767334, -31.62467918396], [-46.748906707764, -31.613931274414], [-46.748763656616, -31.613675689697], [-46.748166656494, -31.611856079102], [-46.747827148438, -31.611251449585], [-46.747083282471, -31.608979797363], [-46.745009994507, -31.605277633667], [-46.744401550293, -31.603423690796], [-46.743114089966, -31.601127243042], [-46.740350341797, -31.592691040039], [-46.739417648315, -31.591025924683], [-46.739410018921, -31.590997314453], [-46.738458251953, -31.589301681518], [-46.735028839111, -31.578824615479], [-46.734790420532, -31.578399276733], [-46.727876281738, -31.557277297974], [-46.725564575195, -31.553147888184], [-46.700799560547, -31.477397537231], [-46.697034454346, -31.470662689209], [-46.688802337646, -31.445453262329], [-46.688792800903, -31.445436096191], [-46.688785171509, -31.445413208008], [-46.687833404541, -31.443709945679], [-46.68652305603, -31.439694976807], [-46.685035324097, -31.437036132812], [-46.685031509399, -31.437018966675], [-46.684077835083, -31.435311889648], [-46.684070205688, -31.435294723511], [-46.683116531372, -31.433587646484], [-46.681056594849, -31.42727432251], [-46.680350875854, -31.426011657715], [-46.679679489136, -31.423955535889], [-46.679418182373, -31.423488235474], [-46.678746795654, -31.421426391602], [-46.67848739624, -31.420960998535], [-46.675763702393, -31.412610626221], [-46.675748443604, -31.41258392334], [-46.675744628906, -31.412570571899], [-46.674789047241, -31.410859680176], [-46.674073791504, -31.408670043945], [-46.673886871338, -31.408336257935], [-46.67187461853, -31.402164077759], [-46.671090698242, -31.400760269165], [-46.670419311523, -31.39870223999], [-46.670158004761, -31.398234939575], [-46.670123672485, -31.3981300354], [-46.513831710815, -31.305972671509], [-46.508567428589, -31.301528549194], [-46.506759262085, -31.30046043396], [-46.346265411377, -31.164168930054], [-46.185771560669, -31.027875518799], [-46.025277709961, -30.891584014893], [-45.982057189941, -30.838887786865], [-45.966798400879, -30.825837707519], [-45.837586975098, -30.667264556885], [-45.708375549316, -30.50869140625], [-45.379162216187, -30.350120162964], [-45.376051330566, -30.344359970093], [-45.22439994812, -30.15680847168], [-45.130388641357, -29.981008148193], [-45.036377334595, -29.805205917358], [-44.942367935181, -29.629405593872], [-44.885498428345, -29.442023849487], [-44.828630828857, -29.254642105103], [-44.771761322021, -29.067260360718], [-44.771156692505, -29.060985183716], [-44.720699691772, -28.893104171753], [-44.67024269104, -28.725225067139], [-44.619785690308, -28.557345962524], [-44.603876495361, -28.389237976074], [-44.583324813843, -28.32038269043], [-44.578375244141, -28.267863845825], [-44.55806388855, -28.19969329834], [-44.540001296997, -28.006597137451], [-44.521936798096, -27.813500976563], [-44.503872299194, -27.620406723022], [-44.504145050049, -27.61778793335], [-44.504007720947, -27.616305923462], [-44.505136871338, -27.605428314209], [-44.48970451355, -27.439504241943], [-44.348963165283, -27.380239105225], [-44.208223724365, -27.320973968506], [-44.206505203247, -27.319888687134], [-44.206179046631, -27.319751358032], [-44.085438156128, -27.243293380737], [-43.871279144287, -27.19049987793], [-43.86720123291, -27.188764190674], [-43.671617889404, -27.105031585693], [-43.476040267944, -27.021297073364], [-43.280460739136, -26.737562561035], [-43.105125808716, -26.624189758301], [-42.929790878296, -26.510815048218], [-42.754455947876, -26.397442245483], [-42.752313995361, -26.395456695557], [-42.751453781128, -26.394897842407], [-42.614864730835, -26.268104934692], [-42.40329208374, -26.248051071167], [-42.396835708618, -26.246382141113], [-42.396133804321, -26.246315383911], [-42.379259490967, -26.241951370239], [-42.343862915039, -26.238562011719], [-42.270147705078, -26.219456100464], [-42.085073852539, -26.2304271698], [-41.9, -26.241398239136], [-41.9, -25.992338562012], [-41.9, -25.743278884888], [-41.9, -25.494217300415], [-41.9, -25.245157623291], [-41.9, -24.996096038818], [-41.9, -24.747036361694], [-41.9, -24.49797668457], [-41.9, -24.248915100098], [-41.9, -23.999855422974], [-41.9, -23.75079574585], [-41.9, -23.501734161377], [-41.9, -23.252674484253], [-41.9, -23.00361289978], [-41.9, -22.754553222656], [-41.934446716309, -22.819170379639], [-42.050840759277, -22.849722290039], [-42.190145874023, -22.845417404175], [-42.32945098877, -22.841112518311], [-42.448614501953, -22.839445495605], [-42.470281982422, -22.839445495605], [-42.526392364502, -22.844169998169], [-42.559866333008, -22.850695037842], [-42.580145263672, -22.86000289917], [-42.710628890991, -22.870418930054], [-42.841112518311, -22.880834960937], [-42.994169616699, -22.85333480835],
                ],
            ],
            [
                [
                    [-41.999992370605, -2.3628940582275], [-41.999992370605, -2.1266040802001], [-41.999994277954, -1.8903141021729], [-41.999994277954, -1.6540260314941], [-41.999994277954, -1.4177360534668], [-41.999996185303, -1.1814460754395], [-41.999996185303, -0.94515609741205], [-41.999998092651, -0.70886802673334], [-41.999998092651, -0.472578048706], [-41.999998092651, -0.23628807067871], [-42, 0], [-42.220657348633, 0], [-42.441314697266, 0], [-42.661972045898, 0], [-42.882629394531, 0], [-43.103286743164, 0], [-43.220508575439, -0.20036315917969], [-43.337730407715, -0.40072631835938], [-43.454954147339, -0.60108947753906], [-43.572175979614, -0.80145454406738], [-43.68939781189, -1.0018177032471], [-43.806621551514, -1.2021808624268], [-43.923843383789, -1.4025440216064], [-44.041067123413, -1.6029090881347], [-44.158288955688, -1.8032722473144], [-44.275510787964, -2.0036354064941], [-44.392734527588, -2.2039985656738], [-44.393096923828, -2.2051448822021], [-44.366394042969, -2.2947216033936], [-44.361671447754, -2.3202781677246], [-44.360557556152, -2.3419437408447], [-44.37910079956, -2.3995132446288], [-44.406394958496, -2.4099998474121], [-44.44153213501, -2.4120826721191], [-44.507507324219, -2.470832824707], [-44.582088470459, -2.5668048858643], [-44.577781677246, -2.6166667938232], [-44.608337402344, -2.6747226715088], [-44.651809692383, -2.7680549621582], [-44.682502746582, -2.9125003814697], [-44.691463470459, -2.9951381683349], [-44.677711486816, -3.0168056488037], [-44.623611450195, -3.0341663360596], [-44.6259765625, -3.055139541626], [-44.756393432617, -3.1933326721191], [-44.783893585205, -3.2045135498046], [-44.786392211914, -3.2975006103515], [-44.75333404541, -3.2744445800781], [-44.660003662109, -3.1880550384521], [-44.616111755371, -3.1100006103515], [-44.546669006348, -3.0563888549804], [-44.480278015137, -3.0081939697266], [-44.45694732666, -2.983055114746], [-44.436950683594, -2.9549999237061], [-44.42306137085, -2.9344444274902], [-44.41056060791, -2.8980560302734], [-44.405555725098, -2.8680553436279], [-44.384170532227, -2.7013893127441], [-44.367500305176, -2.5552768707275], [-44.356948852539, -2.5266666412353], [-44.283199310303, -2.481388092041], [-44.25638961792, -2.4827766418456], [-44.211948394775, -2.4734725952148], [-44.167503356934, -2.4536113739013], [-44.123752593994, -2.4256935119629], [-44.104862213135, -2.4138889312744], [-44.063339233398, -2.405834197998], [-44.033889770508, -2.413610458374], [-44.029029846191, -2.5188884735107], [-44.041946411133, -2.5476379394531], [-44.132919311523, -2.6680545806885], [-44.162086486816, -2.6901378631591], [-44.187088012695, -2.6954174041748], [-44.232780456543, -2.7133331298828], [-44.267227172852, -2.7336120605469], [-44.338371276855, -2.780797958374], [-44.340351104736, -2.8273601531982], [-44.293334960938, -2.8353462219238], [-44.277503967285, -2.8102779388428], [-44.264514923096, -2.783124923706], [-44.190631866455, -2.7634029388428], [-44.176807403564, -2.8165626525878], [-44.214374542236, -2.8495140075684], [-44.198333740234, -2.8688888549804], [-44.177780151367, -2.8480548858642], [-44.121116638184, -2.7708339691162], [-44.021392822266, -2.6511116027832], [-44.005279541016, -2.6330547332764], [-43.928337097168, -2.5484714508057], [-43.873062133789, -2.5697231292725], [-43.799793243408, -2.5516662597656], [-43.707504272461, -2.5100002288818], [-43.560279846191, -2.5230560302734], [-43.448333740234, -2.5377769470214], [-43.458335876465, -2.4580554962158], [-43.478614807129, -2.4109725952148], [-43.477710723877, -2.3827781677246], [-43.438335418701, -2.3679161071777], [-43.347503662109, -2.3658332824706], [-43.321666717529, -2.367639541626], [-43.283340454102, -2.3733329772949], [-43.169242858887, -2.3979167938232], [-43.115837097168, -2.4258327484131], [-43.039726257324, -2.4538879394531], [-43.000835418701, -2.4653472900391], [-42.963062286377, -2.4656944274902], [-42.934097290039, -2.4722213745117], [-42.890007019043, -2.5030555725097], [-42.796184539795, -2.5609016418457], [-42.755004882812, -2.5580558776855], [-42.706672668457, -2.5627784729003], [-42.68229675293, -2.5831241607665], [-42.625839233398, -2.6463890075684], [-42.504447937012, -2.7316665649413], [-42.457504272461, -2.7506942749023], [-42.344100952148, -2.7688884735107], [-42.312782287598, -2.7597217559814], [-42.291389465332, -2.754165649414], [-42.269863128662, -2.7565269470215], [-42.233753204346, -2.8056945800781], [-42.23583984375, -2.8377780914306], [-42.233612060547, -2.8330554962158], [-42.211669921875, -2.8088188171386], [-42.110000610352, -2.8027782440185], [-42.061668395996, -2.819444656372], [-42.027503967285, -2.8299999237061], [-41.999990463257, -2.8354721069336], [-41.999992370605, -2.5991821289062], [-41.999992370605, -2.3628940582275],
                ],
            ],
        ];
    }
}
