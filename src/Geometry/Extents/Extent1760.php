<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * South America/South America - 66°W to 60°W, N hemisphere and PSAD56 by country.
 * @internal
 */
class Extent1760
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [-60, 4.4986553192138], [-60, 4.6915760040284], [-60, 4.8845005035401], [-60.005836486816, 4.8369464874268], [-60.020561218262, 4.7344455718995], [-60.025840759277, 4.7072238922119], [-60.072086334228, 4.6184711456299], [-60.091529846191, 4.6006946563721], [-60.123893737793, 4.5966663360596], [-60.152229309082, 4.5733318328858], [-60.148475646973, 4.5200023651124], [-60.130699157715, 4.5097217559815], [-60.045280456543, 4.4940280914307], [-60, 4.4986553192138],
                ],
            ],
            [
                [
                    [-62.298002243042, 10.750249862671], [-62.352451324463, 10.757680892944], [-62.464647293091, 10.776586532593], [-62.535329818726, 10.785451889038], [-62.696327209473, 10.797822952271], [-62.702571868896, 10.797719955444], [-62.758346557617, 10.791421890259], [-62.805089950561, 10.779481887817], [-62.883834838867, 10.754625320435], [-62.912380218506, 10.746500015259], [-62.946472167969, 10.749433517456], [-62.956851959229, 10.752416610718], [-62.976371765137, 10.762456893921], [-62.982782363892, 10.764783859253], [-62.988922119141, 10.76605796814], [-62.994285583496, 10.766500473023], [-63.173961639404, 10.769811630249], [-63.179809570312, 10.769376754761], [-63.185878753662, 10.768098831177], [-63.192171096802, 10.765756607056], [-63.251386642456, 10.733922958374], [-63.268569946289, 10.726385116577], [-63.291879653931, 10.721090316773], [-63.345916748047, 10.722719192505], [-63.352947235107, 10.722143173218], [-63.516801834106, 10.689008712769], [-63.522569656372, 10.687261581421], [-63.543085098267, 10.678247451782], [-63.662174224854, 10.691373825073], [-63.687561035156, 10.695253372192], [-63.693351745605, 10.695646286011], [-63.847116470337, 10.695768356323], [-63.97996711731, 10.679609298706], [-64.144638061523, 10.668348312378], [-64.219268798828, 10.685762405396], [-64.241239547729, 10.700540542603], [-64.247634887695, 10.70392036438], [-64.25358581543, 10.706052780151], [-64.25972366333, 10.707357406616], [-64.265947341919, 10.707815170288], [-64.272146224976, 10.707414627075], [-64.278215408325, 10.706167221069], [-64.284051895142, 10.704092025757], [-64.289554595947, 10.701223373413], [-64.295124053955, 10.697202682495], [-64.332113265991, 10.664186477661], [-64.336254119873, 10.659700393677], [-64.339902877808, 10.654523849487], [-64.342861175537, 10.648874282837], [-64.345081329346, 10.642839431763], [-64.346521377563, 10.636522293091], [-64.347158432007, 10.630037307739], [-64.346981048584, 10.623495101929], [-64.345994949341, 10.616998672485], [-64.343955993652, 10.610048294067], [-64.301307678223, 10.513471603394], [-64.297719955444, 10.507112503052], [-64.293790817261, 10.501901626587], [-64.289577484131, 10.497518539429], [-64.267599105835, 10.478212356567], [-64.387542724609, 10.430471420288], [-64.392997741699, 10.427629470825], [-64.398719787598, 10.423475265503], [-64.417469024658, 10.406362533569], [-64.42138671875, 10.402082443237], [-64.425039291382, 10.396913528442], [-64.428211212158, 10.390703201294], [-64.440738677979, 10.355501174927], [-64.442153930664, 10.350431442261], [-64.443199157715, 10.344018936157], [-64.443433761597, 10.337491989136], [-64.442853927612, 10.33095741272], [-64.44141960144, 10.324377059937], [-64.491798400879, 10.291040420532], [-64.526784896851, 10.299005508423], [-64.574104309082, 10.308061599732], [-64.581037521362, 10.308637619018], [-64.589712142944, 10.307790756226], [-64.639925003052, 10.29497718811], [-64.645393371582, 10.293004989624], [-64.651494979858, 10.289728164673], [-64.745267868042, 10.219106674194], [-64.751373291016, 10.212957382202], [-64.755027770996, 10.207796096802], [-64.75799369812, 10.202150344849], [-64.760162353516, 10.196332931519], [-64.773031234741, 10.149263381958], [-64.783420562744, 10.143930435181], [-64.801063537598, 10.138124465942], [-64.832889556885, 10.131895065308], [-65.078619003296, 10.111120223999], [-65.267992019653, 10.164457321167], [-65.417798995972, 10.188890457153], [-65.537975311279, 10.226484298706], [-65.717750549316, 10.268232345581], [-65.723468780518, 10.269041061401], [-65.728900909424, 10.269170761108], [-65.764692306519, 10.267156600952], [-65.778457641602, 10.26939201355], [-65.797937393188, 10.274938583374], [-65.898506164551, 10.332941055298], [-65.91522026062, 10.375459671021], [-65.918045043945, 10.381143569946], [-65.921642303467, 10.38662147522], [-65.925872802734, 10.391584396362], [-65.930192947388, 10.395586013794], [-66, 10.450571060181], [-66, 10.205533981323], [-66, 9.9605007171632], [-66, 9.7154636383057], [-66, 9.4704303741456], [-66, 9.2253932952881], [-66, 8.9803600311279], [-66, 8.7353267669678], [-66, 8.4902896881104], [-66, 8.2452564239503], [-66, 8.0002193450928], [-66, 7.7551860809327], [-66, 7.5101528167726], [-66, 7.2651157379151], [-66, 7.0200824737548], [-66, 6.7777652740479], [-66, 6.5354518890381], [-66, 6.2931346893311], [-66, 6.0508174896241], [-66, 5.8116817474365], [-66, 5.572546005249], [-66, 5.3334102630616], [-66, 5.0942745208741], [-66, 4.8551349639893], [-66, 4.6159992218018], [-66, 4.3768634796144], [-66, 4.1377277374268], [-66, 3.8985919952393], [-66, 3.6594524383545], [-66, 3.420316696167], [-66, 3.1811809539795], [-66, 2.9420452117921], [-66, 2.7029056549073], [-66, 2.4637699127198], [-66, 2.2246341705322], [-66, 1.9854984283447], [-66, 1.7463626861573], [-66, 1.5072231292725], [-66, 1.268087387085], [-66, 1.0289516448976], [-66, 0.7898159027099], [-65.979591369629, 0.79874992370617], [-65.955146789551, 0.81833457946783], [-65.929039001465, 0.85402870178223], [-65.912780761719, 0.87180519104004], [-65.870834350586, 0.90833473205578], [-65.735290527344, 0.98277854919439], [-65.6572265625, 0.98972129821772], [-65.595428466797, 0.99041938781738], [-65.559448242187, 0.97111320495611], [-65.539733886719, 0.9500026702882], [-65.522094726562, 0.92694664001476], [-65.510139465332, 0.90194511413586], [-65.506950378418, 0.87180519104004], [-65.511116027832, 0.83888816833496], [-65.527374267578, 0.80666923522949], [-65.567504882812, 0.76472282409674], [-65.582572937012, 0.72979164123547], [-65.575561523437, 0.6963901519776], [-65.558616638184, 0.66611289978033], [-65.542366027832, 0.65166664123535], [-65.521667480469, 0.64916801452642], [-65.485771179199, 0.66187477111822], [-65.436111450195, 0.69528007507324], [-65.400283813477, 0.75395774841303], [-65.398345947266, 0.78903007507336], [-65.395011901855, 0.81861305236822], [-65.385841369629, 0.83708381652832], [-65.321670532227, 0.91194343566906], [-65.291465759277, 0.92659950256353], [-65.253059387207, 0.9152774810791], [-65.227645874023, 0.91499900817871], [-65.192504882812, 0.9266681671142], [-65.173889160156, 0.9500026702882], [-65.16584777832, 0.96944618225098], [-65.160842895508, 0.98902702331549], [-65.154449462891, 1.0352802276612], [-65.153900146484, 1.0555553436279], [-65.146530151367, 1.0976390838624], [-65.136260986328, 1.1184749603271], [-65.103889465332, 1.1420841217041], [-65.006958007812, 1.16583442688], [-64.943069458008, 1.2105579376221], [-64.819068908691, 1.2794780731201], [-64.783065795898, 1.2600002288818], [-64.757232666016, 1.2443065643312], [-64.731742858887, 1.2469463348389], [-64.697509765625, 1.2627773284913], [-64.595291137695, 1.3299999237061], [-64.578964233398, 1.3497905731202], [-64.563201904297, 1.3913898468018], [-64.549034118652, 1.4151401519775], [-64.529731750488, 1.4336109161378], [-64.394309997559, 1.5118045806886], [-64.365768432617, 1.5075702667237], [-64.264450073242, 1.476110458374], [-64.113204956055, 1.5829181671143], [-64.077987670898, 1.6354160308839], [-64.062782287598, 1.6811122894288], [-64.049865722656, 1.8068065643312], [-64.052368164062, 1.8408336639404], [-64.051887512207, 1.8904857635499], [-64.030143737793, 1.9247226715088], [-64.002365112305, 1.9498615264893], [-63.970558166504, 1.9672222137451], [-63.936531066895, 1.9768047332764], [-63.825004577637, 1.9777774810792], [-63.73917388916, 2.0030574798585], [-63.718612670898, 2.0236110687256], [-63.607086181641, 2.1059741973878], [-63.545417785645, 2.1299991607667], [-63.488334655762, 2.1305561065675], [-63.399448394775, 2.1495151519775], [-63.380004882812, 2.2291660308839], [-63.360767364502, 2.2590999603271], [-63.346389770508, 2.4061107635497], [-63.365421295166, 2.4200000762939], [-63.581672668457, 2.4347248077393], [-63.782203674316, 2.4271640777589], [-63.821807861328, 2.4258327484131], [-64.034034729004, 2.4713191986085], [-64.046463012695, 2.5094432830812], [-64.031257629395, 2.5497226715088], [-64.017227172852, 2.5738887786866], [-63.995418548584, 2.6230564117433], [-63.987850189209, 2.7186107635499], [-64.034729003906, 2.8327770233154], [-64.088897705078, 2.9408359527587], [-64.146118164062, 3.0397243499755], [-64.158889770508, 3.0608348846436], [-64.205291748047, 3.1933345794678], [-64.226669311523, 3.3374996185303], [-64.235702514648, 3.4327793121338], [-64.224380493164, 3.4669437408447], [-64.193481445312, 3.5013904571534], [-64.184722900391, 3.5277767181398], [-64.182373046875, 3.5493068695069], [-64.190216064453, 3.5896549224854], [-64.308059692383, 3.7183361053468], [-64.365844726562, 3.7505550384523], [-64.405288696289, 3.7672214508057], [-64.446327209473, 3.7870159149171], [-64.51806640625, 3.8544445037842], [-64.626678466797, 3.9655551910401], [-64.64208984375, 3.9843044281006], [-64.660980224609, 4.0166683197021], [-64.694458007812, 4.0819454193115], [-64.704727172852, 4.1186122894288], [-64.713134765625, 4.1440296173096], [-64.733894348145, 4.1612491607667], [-64.785911560059, 4.1858348846437], [-64.801956176758, 4.2108325958253], [-64.800010681152, 4.265069961548], [-64.781669616699, 4.2863903045654], [-64.74626159668, 4.2872219085694], [-64.724174499512, 4.2813892364502], [-64.693069458008, 4.2672214508057], [-64.674728393555, 4.2575016021729], [-64.651954650879, 4.2391681671142], [-64.642150878906, 4.2237720489502], [-64.607788085937, 4.1452770233154], [-64.592018127441, 4.127779006958], [-64.552925109863, 4.1223621368409], [-64.467514038086, 4.1338901519775], [-64.430282592773, 4.1400012969971], [-64.402236938477, 4.1491680145264], [-64.379867553711, 4.1536121368409], [-64.335556030273, 4.1541690826416], [-64.248901367187, 4.1480541229249], [-64.221115112305, 4.1411113739014], [-64.126388549805, 4.109582901001], [-64.108894348144, 4.0827770233155], [-64.087783813477, 4.032777786255], [-64.064590454102, 3.9552783966065], [-64.052711486816, 3.9084377288819], [-64.017791748047, 3.8861103057861], [-63.994167327881, 3.8829174041749], [-63.956253051758, 3.8912525177003], [-63.940559387207, 3.9045848846436], [-63.909030914307, 3.9330577850342], [-63.84806060791, 3.9588909149169], [-63.644451141357, 3.9486103057862], [-63.614170074463, 3.9448604583741], [-63.589172363281, 3.9283351898194], [-63.573616027832, 3.9097232818605], [-63.547920227051, 3.880693435669], [-63.530139923096, 3.8672237396241], [-63.49153137207, 3.8577785491944], [-63.458198547363, 3.866460800171], [-63.445556640625, 3.8902797698975], [-63.438751220703, 3.9151401519775], [-63.433616638184, 3.9416675567627], [-63.419101715088, 3.9670848846435], [-63.382507324219, 3.9708347320557], [-63.359451293945, 3.9658336639405], [-63.335556030273, 3.9580554962158], [-63.293964385986, 3.9393749237062], [-63.242294311523, 3.8981266021728], [-63.164169311523, 3.7952785491943], [-63.077365875244, 3.6997928619385], [-62.990562438965, 3.6043071746826], [-62.923614501953, 3.5672245025635], [-62.903060913086, 3.5629177093505], [-62.87805557251, 3.5601406097413], [-62.781253814697, 3.6043071746826], [-62.751396179199, 3.638334274292], [-62.734031677246, 3.6765270233155], [-62.727226257324, 3.7052783966066], [-62.727500915527, 3.7311115264893], [-62.740142822266, 3.7905559539795], [-62.758338928223, 3.8347225189208], [-62.777225494385, 3.8825016021728], [-62.780418395996, 3.9087505340576], [-62.757778167725, 4.0202770233155], [-62.728340148926, 4.038610458374], [-62.669864654541, 4.0468044281005], [-62.604167938232, 4.0419445037842], [-62.539932250977, 4.1122913360597], [-62.440139770508, 4.1826725006105], [-62.392227172852, 4.1794452667237], [-62.321113586426, 4.1524982452393], [-62.281394958496, 4.1361103057862], [-62.262504577637, 4.1272220611572], [-62.220840454102, 4.1125011444092], [-62.180976867676, 4.0995845794678], [-62.142642974853, 4.0931949615479], [-62.104793548584, 4.1038913726808], [-62.07931137085, 4.1248607635498], [-62.053195953369, 4.1501407623291], [-61.987503051758, 4.169584274292], [-61.952014923096, 4.1568050384522], [-61.914863586426, 4.1469440460206], [-61.848892211914, 4.1605548858644], [-61.811531066894, 4.1848621368408], [-61.790561676025, 4.2156963348389], [-61.762920379639, 4.243055343628], [-61.699172973633, 4.2590274810791], [-61.662780761719, 4.2552776336669], [-61.6252784729, 4.2442378997803], [-61.554378509521, 4.2488193511963], [-61.524032592773, 4.2748622894288], [-61.510696411133, 4.303472518921], [-61.50736618042, 4.3273601531984], [-61.512783050537, 4.3619441986084], [-61.50736618042, 4.3905544281006], [-61.492225646973, 4.4063892364503], [-61.313613891602, 4.5066661834716], [-61.16389465332, 4.4943065643311], [-61.052505493164, 4.507776260376], [-60.987087249756, 4.51930809021], [-60.968338012695, 4.5383358001708], [-60.951667785644, 4.5569438934327], [-60.929862976074, 4.5918750762939], [-60.924583435059, 4.6377086639404], [-60.886531829834, 4.709722518921], [-60.866809844971, 4.7133350372314], [-60.83861541748, 4.7184734344483], [-60.720279693604, 4.7761096954346], [-60.675559997559, 4.8138904571533], [-60.649311065674, 4.8429164886476], [-60.592506408691, 4.9247226715088], [-60.578544616699, 4.9526386260987], [-60.582366943359, 4.988473892212], [-60.644172668457, 5.1586093902588], [-60.646772384644, 5.1639614105225], [-60.655212402344, 5.1813182830811], [-60.68514251709, 5.196943283081], [-60.710975646973, 5.202917098999], [-60.730369567871, 5.204797744751], [-60.689445495605, 5.2161121368408], [-60.597431182861, 5.2119464874268], [-60.573825836182, 5.1971530914307], [-60.546394348145, 5.1913890838624], [-60.317848205566, 5.1976375579835], [-60.268405914307, 5.2352771759034], [-60.250003814697, 5.2584743499756], [-60.202365875244, 5.2727069854737], [-60.114585876465, 5.2456951141358], [-60.098335266113, 5.2172222137451], [-60.08194732666, 5.1730556488038], [-60.080871582031, 5.1615123748779], [-60.013893127441, 5.1100025177003], [-60, 5.0705699920655], [-60, 5.3035907745362], [-60, 5.5366115570069], [-60, 5.7696323394775], [-60, 6.0026531219482], [-60, 6.2356777191162], [-60, 6.4686985015869], [-60, 6.7017192840576], [-60, 6.9347400665284], [-60, 7.1677608489991], [-60, 7.4007816314697], [-60, 7.6338024139404], [-60, 7.8668231964111], [-60, 8.0998439788819], [-60, 8.3482456207276], [-60, 8.5966434478761], [-60.00707244873, 8.5999698638916], [-60.124992370605, 8.6503391265869], [-60.196250915527, 8.6709079742432], [-60.231658935547, 8.6773204803467], [-60.382820129394, 8.6825428009033], [-60.389692306519, 8.6820430755615], [-60.39644241333, 8.6804523468018], [-60.428842544556, 8.6674175262451], [-60.436325073242, 8.6630420684816], [-60.441162109375, 8.6589984893799], [-60.445446014404, 8.6543102264405], [-60.449100494385, 8.6490650177003], [-60.452043533325, 8.6434040069581], [-60.469089508057, 8.6014232635498], [-60.485509872437, 8.5815868377686], [-60.607902526855, 8.5989704132081], [-60.63175201416, 8.6196155548096], [-60.659067153931, 8.6387653350831], [-60.665214538574, 8.641939163208], [-60.670373916626, 8.6437892913819], [-60.705499649048, 8.6533641815186], [-60.710922241211, 8.6543788909913], [-60.719566345215, 8.6546115875245], [-60.765518188477, 8.6492366790771], [-60.761770248413, 8.6589832305909], [-60.760046005249, 8.6649227142334], [-60.759014129639, 8.671178817749], [-60.756761550903, 8.7008647918702], [-60.756673812866, 8.7059764862061], [-60.757253646851, 8.712522506714], [-60.758638381958, 8.7189464569092], [-60.760740280151, 8.7249965667725], [-60.767021179199, 8.7389278411865], [-60.770572662353, 8.7451648712159], [-60.774503707886, 8.7503376007081], [-60.77903175354, 8.7549381256104], [-60.784078598022, 8.7588901519775], [-60.789562225342, 8.7621212005616], [-60.79532623291, 8.7645664215088], [-60.831285476685, 8.7756519317627], [-60.839799880981, 8.7770290374755], [-60.846031188965, 8.7769756317139], [-60.852602005005, 8.776372909546], [-60.826694488525, 8.8057689666749], [-60.823352813721, 8.8100643157959], [-60.820035934448, 8.815549850464], [-60.817436218262, 8.8214588165284], [-60.81559753418, 8.8276920318604], [-60.814640045166, 8.8331127166747], [-60.813089370728, 8.8478069305419], [-60.812925338745, 8.8537502288818], [-60.813507080078, 8.8602962493897], [-60.814891815186, 8.866720199585], [-60.817058563232, 8.8729152679444], [-60.819971084595, 8.8787784576417], [-60.823575973511, 8.8842029571533], [-60.827814102173, 8.8891010284423], [-60.832191467285, 8.8930568695068], [-60.836736679077, 8.8963069915771], [-60.821626663208, 8.912202835083], [-60.8176612854, 8.9171581268311], [-60.814054489136, 8.9232120513917], [-60.804967880249, 8.942491531372], [-60.802715301514, 8.9488315582275], [-60.794025421143, 8.9865398406983], [-60.793174743652, 8.9922008514404], [-60.79294013977, 8.9987506866456], [-60.793521881104, 9.0052967071533], [-60.79490852356, 9.0117206573487], [-60.797077178955, 9.0179157257081], [-60.799987792969, 9.023775100708], [-60.802959442139, 9.0283870697023], [-60.8128490448, 9.0413417816163], [-60.812101364136, 9.0485935211182], [-60.809938430786, 9.0536937713624], [-60.808113098145, 9.0598659515382], [-60.803377151489, 9.0843982696533], [-60.802965164185, 9.0958652496338], [-60.803974151611, 9.1031856536865], [-60.805755615234, 9.1095066070557], [-60.808301925659, 9.1155490875244], [-60.811567306519, 9.1212024688722], [-60.815498352051, 9.1263751983642], [-60.820028305054, 9.1309757232666], [-60.825075149536, 9.1349277496339], [-60.830556869507, 9.1381587982178], [-60.836380004883, 9.1406192779542], [-60.842441558838, 9.1422634124757], [-60.848640441895, 9.1430644989013], [-60.854867935181, 9.1430110931398], [-60.86102104187, 9.1420993804932], [-60.866737365723, 9.1404514312745], [-60.919902801514, 9.1194705963136], [-60.915218353271, 9.1270771026612], [-60.912536621094, 9.1323413848877], [-60.910139083862, 9.1390323638917], [-60.904113769531, 9.1626796722413], [-60.903106689453, 9.1689929962159], [-60.90287399292, 9.1755428314209], [-60.903402328491, 9.1817302703859], [-60.890432357788, 9.1913776397706], [-60.833127975464, 9.2148418426514], [-60.807996749878, 9.2198314666749], [-60.802309036255, 9.2215290069581], [-60.796621322632, 9.2240924835205], [-60.791316986084, 9.2274227142334], [-60.786098480225, 9.2318325042725], [-60.748989105225, 9.2698459625244], [-60.74501991272, 9.2748126983643], [-60.741706848145, 9.2803020477295], [-60.739110946655, 9.2862148284913], [-60.737277984619, 9.2924442291261], [-60.736209869385, 9.2994632720948], [-60.735342025757, 9.3305225372314], [-60.735570907593, 9.3359432220459], [-60.736558914185, 9.3424396514894], [-60.737852096558, 9.3473796844482], [-60.753606796265, 9.396017074585], [-60.756101608276, 9.401891708374], [-60.759368896484, 9.4075450897217], [-60.762617111206, 9.4119434356689], [-60.819097518921, 9.4782962799072], [-60.823699951172, 9.4828433990478], [-60.932632446289, 9.5731563568115], [-60.962762832642, 9.5940990447999], [-60.968076705933, 9.5971240997314], [-61.027908325195, 9.6226634979249], [-61.033338546753, 9.6245555877686], [-61.039255142212, 9.6260204315186], [-61.079658508301, 9.6320514678955], [-61.085693359375, 9.6323757171631], [-61.195255279541, 9.62868309021], [-61.238496780395, 9.6364688873292], [-61.353401184082, 9.7190837860107], [-61.370779037476, 9.7366542816162], [-61.383737564087, 9.7570323944091], [-61.403890609741, 9.8074207305909], [-61.406686782837, 9.8129863739014], [-61.411870956421, 9.820318222046], [-61.447919845581, 9.8593425750733], [-61.45333480835, 9.8640880584717], [-61.531229019165, 9.9188899993897], [-61.553861618042, 9.9309520721437], [-61.603685379028, 9.9520587921142], [-61.608863830566, 9.9537868499756], [-61.615003585815, 9.9550304412842], [-61.621227264404, 9.9554233551026], [-61.62742805481, 9.9549541473389], [-61.632564544678, 9.9539241790771], [-61.66224861145, 9.9455738067626], [-61.667526245117, 9.9435787200927], [-61.673030853271, 9.9406490325928], [-61.678108215332, 9.9369754791261], [-61.682670593262, 9.932622909546], [-61.686641693115, 9.9276676177979], [-61.689952850342, 9.922197341919], [-61.692546844482, 9.9162998199463], [-61.694379806519, 9.9100780487061], [-61.695419311523, 9.9036388397217], [-61.695648193359, 9.8970928192139], [-61.695064544678, 9.8905506134034], [-61.693675994873, 9.8841266632081], [-61.691505432129, 9.8779277801515], [-61.689254760742, 9.8731899261474], [-61.676773071289, 9.850580215454], [-61.698843002319, 9.8587169647217], [-61.761577606201, 9.8788814544679], [-61.769937515259, 9.8803081512451], [-61.794788360596, 9.881181716919], [-61.803394317627, 9.8802318572999], [-61.809362411499, 9.8785037994385], [-61.815046310425, 9.8759670257569], [-61.820348739624, 9.8726596832277], [-61.825180053711, 9.8686428070068], [-61.829458236694, 9.8639812469484], [-61.833106994629, 9.8587627410889], [-61.83602142334, 9.8532085418701], [-61.930055618286, 9.9481029510499], [-61.934925079346, 9.9523067474366], [-62.028842926025, 10.019483566284], [-62.034576416016, 10.022771835327], [-62.061740875244, 10.033952713013], [-62.168682098389, 10.063413619995], [-62.17402267456, 10.064435958862], [-62.182727813721, 10.064706802368], [-62.217092514038, 10.060670852661], [-62.222860336304, 10.059408187866], [-62.228698730469, 10.057279586792], [-62.234203338623, 10.054361343384], [-62.239280700684, 10.050699234009], [-62.243844985962, 10.046361923218], [-62.247816085815, 10.041418075561], [-62.251075744629, 10.036066055298], [-62.261695861816, 10.016008377075], [-62.267066955566, 10.014417648315], [-62.272750854492, 10.011892318726], [-62.278476715088, 10.008291244507], [-62.282884597778, 10.004590988159], [-62.287162780762, 9.9999408721923], [-62.290534973144, 9.9951839447022], [-62.293771743774, 9.9890384674073], [-62.295991897583, 9.9829769134522], [-62.297431945801, 9.9766368865967], [-62.298057556152, 9.9694919586182], [-62.29591178894, 9.9084644317628], [-62.295347213745, 9.9030284881592], [-62.293865203857, 9.8963069915771], [-62.28515625, 9.8704509735108], [-62.284856796265, 9.863920211792], [-62.297096252441, 9.8287982940675], [-62.330797195435, 9.9036769866944], [-62.38419342041, 10.000406265259], [-62.425489425659, 10.107065200806], [-62.443613052368, 10.167379379273], [-62.445444107056, 10.172342300415], [-62.448040008545, 10.177690505981], [-62.4612865448, 10.200288772583], [-62.464389801025, 10.204835891724], [-62.468627929688, 10.209753036499], [-62.472370147705, 10.2132396698], [-62.507598876953, 10.242212295532], [-62.51322555542, 10.24599647522], [-62.557825088501, 10.270204544067], [-62.563491821289, 10.272619247437], [-62.569549560547, 10.274301528931], [-62.578084945679, 10.275194168091], [-62.614784240723, 10.273862838745], [-62.620094299316, 10.290979385376], [-62.621767044067, 10.296743392944], [-62.624315261841, 10.302793502808], [-62.626945495605, 10.307523727417], [-62.648248672485, 10.34027671814], [-62.701112747192, 10.406438827515], [-62.706045150757, 10.411539077759], [-62.711091995239, 10.415517807007], [-62.715826034546, 10.418420791626], [-62.770944595337, 10.446657180786], [-62.776090621948, 10.448797225952], [-62.782150268555, 10.450487136841], [-62.787519454956, 10.452222824097], [-62.790405273438, 10.499601364136], [-62.666353225708, 10.517946243286], [-62.65246963501, 10.518033981323], [-62.58910369873, 10.50629234314], [-62.537532806396, 10.491785049439], [-62.531410217285, 10.490640640259], [-62.450529098511, 10.483270645142], [-62.327198028564, 10.481660842896], [-62.320466995239, 10.482545852661], [-62.314502716064, 10.484262466431], [-62.308820724487, 10.486791610718], [-62.302947998047, 10.490510940552], [-62.271099090576, 10.515794754028], [-62.266763687134, 10.519956588745], [-62.262798309326, 10.524900436401], [-62.259675979614, 10.529985427856], [-62.246286392212, 10.556711196899], [-62.239551544189, 10.566892623901], [-62.227418899536, 10.578870773316], [-62.160419464111, 10.586336135864], [-62.142892837524, 10.585069656372], [-62.125516891479, 10.579717636108], [-62.11866569519, 10.578424453735], [-62.08345413208, 10.577150344849], [-62.027797698975, 10.58286857605], [-61.941993713379, 10.599851608276], [-61.935916900635, 10.601694107056], [-61.901559829712, 10.615747451782], [-61.896102905273, 10.618658065796], [-61.891267776489, 10.622121810913], [-61.850492477417, 10.657678604126], [-61.844734191895, 10.664407730103], [-61.841428756714, 10.669881820679], [-61.838842391968, 10.675775527954], [-61.837017059326, 10.681997299194], [-61.836088180542, 10.687242507935], [-61.832151412964, 10.72287940979], [-61.832015991211, 10.728590011597], [-61.832607269287, 10.735132217407], [-61.834003448486, 10.741556167603], [-61.836177825928, 10.747755050659], [-61.839096069336, 10.753622055054], [-61.842708587646, 10.75905418396], [-61.846950531006, 10.763959884644], [-61.851751327515, 10.768259048462], [-61.857027053833, 10.771871566773], [-61.862691879272, 10.774740219116], [-61.868642807007, 10.776815414429], [-61.877769470215, 10.778299331665], [-61.986022949219, 10.778188705444], [-61.992029190063, 10.777643203735], [-62.139730453491, 10.750997543335], [-62.195114135742, 10.744459152222], [-62.298002243042, 10.750249862671],
                ],
            ],
            [
                [
                    [-65.261281967163, 10.831480026245], [-65.199188232422, 10.842313766479], [-65.193431854248, 10.843919754028], [-65.185668945312, 10.847578048706], [-65.171899795532, 10.856630325317], [-65.167200088501, 10.860483169556], [-65.162923812866, 10.865072250366], [-65.15927696228, 10.870229721069], [-65.156318664551, 10.875867843628], [-65.154100418091, 10.881887435913], [-65.152662277222, 10.888193130493], [-65.152025222778, 10.89467048645], [-65.152126312256, 10.900495529175], [-65.153518676758, 10.915460586548], [-65.154626846313, 10.921854019165], [-65.167373657227, 10.969282150269], [-65.170087814331, 10.975923538208], [-65.17335319519, 10.981611251831], [-65.177284240723, 10.986833572388], [-65.181812286377, 10.991491317749], [-65.186857223511, 10.995515823364], [-65.192337036133, 10.998830795288], [-65.200567245483, 11.002122879028], [-65.298982620239, 11.025491714478], [-65.305820465088, 11.02610206604], [-65.310941696167, 11.025880813599], [-65.374536514282, 11.018354415893], [-65.381038665771, 11.016637802124], [-65.385774612427, 11.014692306519], [-65.397373199463, 11.008825302124], [-65.413921356201, 10.998670578003], [-65.419054031372, 10.994550704956], [-65.451210021973, 10.962274551392], [-65.456430435181, 10.955362319946], [-65.45938873291, 10.949728012085], [-65.46160697937, 10.9437084198], [-65.463335037231, 10.934988021851], [-65.463703155518, 10.927091598511], [-65.463258743286, 10.915590286255], [-65.462694168091, 10.910165786743], [-65.461305618286, 10.903741836548], [-65.459138870239, 10.897531509399], [-65.456226348877, 10.891641616821], [-65.452621459961, 10.886171340942], [-65.448385238647, 10.881216049194], [-65.443590164185, 10.876863479614], [-65.438318252563, 10.873178482056], [-65.432954788208, 10.870355606079], [-65.40678024292, 10.859601974487], [-65.360090255737, 10.847604751587], [-65.30735206604, 10.834054946899], [-65.290977478027, 10.831621170044], [-65.283285140991, 10.830476760864], [-65.27728843689, 10.830316543579], [-65.261281967163, 10.831480026245],
                ],
            ],
            [
                [
                    [-63.801794052124, 11.146806716919], [-63.806091308594, 11.15479850769], [-63.809152603149, 11.15899848938], [-63.851860046387, 11.210424423218], [-63.857095718384, 11.215257644653], [-63.862373352051, 11.218908309937], [-63.868034362793, 11.221815109253], [-63.873987197876, 11.223936080933], [-63.880125045776, 11.225229263306], [-63.886346817017, 11.225671768189], [-63.892543792725, 11.225259780884], [-63.898611068726, 11.224000930786], [-63.904443740845, 11.221910476685], [-63.909942626953, 11.219030380249], [-63.915554046631, 11.214952468872], [-63.984748840332, 11.15235710144], [-64.022754669189, 11.110948562622], [-64.026092529297, 11.106698989868], [-64.029764175415, 11.100538253784], [-64.059322357178, 11.036401748657], [-64.076286315918, 11.038263320923], [-64.090129852295, 11.042245864868], [-64.143413543701, 11.071607589722], [-64.14395904541, 11.078718185425], [-64.14624786377, 11.09178352356], [-64.148181915283, 11.098829269409], [-64.150733947754, 11.104887008667], [-64.15400314331, 11.110567092896], [-64.157936096191, 11.115774154663], [-64.162466049194, 11.120420455933], [-64.167512893677, 11.124422073364], [-64.171884536743, 11.127157211304], [-64.184339523315, 11.133661270142], [-64.190845489502, 11.136072158814], [-64.196985244751, 11.137372970581], [-64.202178955078, 11.137826919556], [-64.220232009888, 11.138109207153], [-64.226789474487, 11.137559890747], [-64.389511108398, 11.10597038269], [-64.394954681396, 11.104398727417], [-64.400634765625, 11.101922988892], [-64.405933380127, 11.098676681519], [-64.410758972168, 11.094717025757], [-64.415029525757, 11.09010887146], [-64.418674468994, 11.084936141968], [-64.421627044678, 11.07928276062], [-64.423492431641, 11.074460983276], [-64.451303482056, 10.986108779907], [-64.452629089355, 10.980134963989], [-64.453262329102, 10.973653793335], [-64.45308303833, 10.967107772827], [-64.452091217041, 10.960615158081], [-64.450305938721, 10.954286575317], [-64.447757720947, 10.948225021362], [-64.444490432739, 10.942541122437], [-64.440559387207, 10.937330245972], [-64.436031341553, 10.932680130005], [-64.43098449707, 10.928670883179], [-64.425504684448, 10.925371170044], [-64.419776916504, 10.92286491394], [-64.408836364746, 10.919321060181], [-64.368209838867, 10.906167984009], [-64.349815368652, 10.902849197388], [-64.232015609741, 10.881605148315], [-64.223440170288, 10.881296157837], [-64.21791267395, 10.881982803345], [-64.18959236145, 10.887998580933], [-64.18452835083, 10.889493942261], [-64.178846359253, 10.891977310181], [-64.171558380127, 10.896802902222], [-64.163366317749, 10.903749465942], [-64.098445892334, 10.836938858032], [-64.096069335938, 10.832349777222], [-64.092790603638, 10.827325820923], [-64.088224411011, 10.821954727173], [-64.083005905151, 10.81728553772], [-64.078609466553, 10.814237594605], [-64.072490692139, 10.81104850769], [-64.066539764404, 10.808919906616], [-64.060401916504, 10.807622909546], [-64.054180145264, 10.807168960571], [-64.047981262207, 10.807577133179], [-64.041912078857, 10.808828353882], [-64.03692817688, 10.810525894165], [-63.958669662476, 10.844102859497], [-63.881568908691, 10.854902267456], [-63.876359939575, 10.856058120728], [-63.870525360107, 10.858148574829], [-63.865022659302, 10.861028671265], [-63.859498977661, 10.865068435669], [-63.779998779297, 10.943071365357], [-63.774669647217, 10.950147628784], [-63.771717071533, 10.955808639526], [-63.769260406494, 10.962736129761], [-63.758275985718, 11.008874893189], [-63.757377624512, 11.01474571228], [-63.757154464722, 11.021280288696], [-63.757743835449, 11.027814865112], [-63.759386062622, 11.034955978393], [-63.801794052124, 11.146806716919],
                ],
            ],
        ];
    }
}
