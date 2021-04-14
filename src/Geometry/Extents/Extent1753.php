<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * South America/Peru - west of 79°W.
 * @internal
 */
class Extent1753
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [-80.17529296875, -3.90305519104], [-80.153335571289, -3.8842277526855], [-80.17667388916, -3.859167098999], [-80.211395263672, -3.7391662597656], [-80.207778930664, -3.7172222137451], [-80.206115722656, -3.6366653442383], [-80.212783813477, -3.595832824707], [-80.235000610352, -3.497220993042], [-80.259170532227, -3.4174308776855], [-80.340423583984, -3.3805160522461], [-80.392658233643, -3.3927669525146], [-80.394443511963, -3.4027061462402], [-80.406812667847, -3.4291191101074], [-80.41463470459, -3.4401321411133], [-80.421266555786, -3.4450759887695], [-80.429941177368, -3.4472713470459], [-80.449150085449, -3.4483470916748], [-80.509677886963, -3.4495029449463], [-80.516395568848, -3.4505004882812], [-80.52240562439, -3.4522953033447], [-80.55507850647, -3.465877532959], [-80.562450408936, -3.47021484375], [-80.567195892334, -3.4742183685303], [-80.57134437561, -3.4788379669189], [-80.574996948242, -3.4843330383301], [-80.591554641724, -3.5176658630371], [-80.599336624146, -3.5325736999512], [-80.636190414429, -3.581901550293], [-80.675342559814, -3.6039657592773], [-80.748235702515, -3.6422023773193], [-80.846677780151, -3.7063255310059], [-80.852073669434, -3.710765838623], [-80.855609893799, -3.7145595550537], [-80.871850967407, -3.7348041534424], [-80.875228881836, -3.7399673461914], [-80.890808105469, -3.7717456817627], [-80.892719268799, -3.7765426635742], [-80.903472900391, -3.812032699585], [-80.909774780273, -3.8454265594482], [-80.916084289551, -3.8530673980713], [-80.9690284729, -3.8849487304688], [-81.019027709961, -3.9205665588379], [-81.023294448853, -3.924201965332], [-81.027919769287, -3.9293899536133], [-81.062307357788, -3.9780082702637], [-81.098989486694, -4.0501708984375], [-81.146785736084, -4.0817680358887], [-81.151222229004, -4.085277557373], [-81.292684555054, -4.2154979705811], [-81.297973632812, -4.2217407226562], [-81.318880081177, -4.2544193267822], [-81.321872711182, -4.2604751586914], [-81.33521270752, -4.2957668304443], [-81.33683013916, -4.3018226623535], [-81.337631225586, -4.3080997467041], [-81.337598800659, -4.3144721984863], [-81.336984634399, -4.3196296691895], [-81.329145431519, -4.3619651794434], [-81.328857421875, -4.3798351287842], [-81.351146697998, -4.5399131774902], [-81.373807907104, -4.6220741271973], [-81.384866714478, -4.6361484527588], [-81.388031005859, -4.6412830352783], [-81.399572372437, -4.6646175384521], [-81.401550292969, -4.6695079803467], [-81.403188705444, -4.6755790710449], [-81.404005050659, -4.6818523406982], [-81.403985977173, -4.6882228851318], [-81.403131484985, -4.6945819854736], [-81.401456832886, -4.7008190155029], [-81.39923286438, -4.7063522338867], [-81.388660430908, -4.7275447845459], [-81.385911941528, -4.7322368621826], [-81.382623672485, -4.7367668151855], [-81.366041183472, -4.7565155029297], [-81.24925994873, -4.8821754455566], [-81.158758163452, -4.9819469451904], [-81.151165008545, -4.9921970367432], [-81.139947891235, -5.0148963928223], [-81.15087890625, -5.0136451721191], [-81.156509399414, -5.013427734375], [-81.16286277771, -5.0139427185059], [-81.169052124023, -5.0152835845947], [-81.174795150757, -5.0173435211182], [-81.203859329224, -5.0311737060547], [-81.211080551147, -5.0359764099121], [-81.215604782104, -5.0402565002441], [-81.219499588013, -5.0451164245605], [-81.222694396973, -5.0504741668701], [-81.225137710571, -5.0562381744385], [-81.226678848267, -5.0617046356201], [-81.252140045166, -5.1934413909912], [-81.252769470215, -5.1987762451172], [-81.252763748169, -5.2051486968994], [-81.251920700073, -5.2115097045898], [-81.250253677368, -5.2177505493164], [-81.247793197632, -5.223762512207], [-81.244581222534, -5.2294445037842], [-81.241451263428, -5.233793258667], [-81.172836303711, -5.3172760009766], [-81.168575286865, -5.3216686248779], [-81.163480758667, -5.3258056640625], [-81.158926010132, -5.3287448883057], [-81.134992599487, -5.3420276641846], [-81.129133224487, -5.3446407318115], [-81.115163803101, -5.3492126464844], [-81.084127426147, -5.3766288757324], [-81.016576766968, -5.4420795440674], [-80.996946334839, -5.4658737182617], [-80.966987609863, -5.5221920013428], [-80.958084106445, -5.5417499542236], [-80.922077178955, -5.6498908996582], [-80.922609329224, -5.7068939208984], [-80.92943572998, -5.7500343322754], [-80.935203552246, -5.7711906433105], [-80.941930770874, -5.7846450805664], [-80.958395004272, -5.8110885620117], [-80.965473175049, -5.8169174194336], [-80.972478866577, -5.8194789886475], [-80.981708526611, -5.8203792572021], [-80.996971130371, -5.8162708282471], [-81.014841079712, -5.8088722229004], [-81.043748855591, -5.7907123565674], [-81.050117492676, -5.7877063751221], [-81.056325912476, -5.7857398986816], [-81.062698364258, -5.7845821380615], [-81.068140029907, -5.7842273712158], [-81.115982055664, -5.7845344543457], [-81.121738433838, -5.785041809082], [-81.127950668335, -5.7863731384277], [-81.136045455933, -5.7895660400391], [-81.180749893188, -5.8150901794434], [-81.186225891113, -5.819429397583], [-81.191879272461, -5.8259143829346], [-81.221590042114, -5.8716564178467], [-81.224414825439, -5.8771724700928], [-81.226425170898, -5.8828086853027], [-81.24538230896, -5.9578151702881], [-81.246271133423, -5.9671611785889], [-81.245485305786, -5.9906787872314], [-81.244695663452, -5.9968452453613], [-81.222053527832, -6.0974788665771], [-81.218929290771, -6.1058902740479], [-81.215730667114, -6.1115779876709], [-81.21183013916, -6.1168422698975], [-81.207000732422, -6.1218357086182], [-81.175346374512, -6.1478614807129], [-81.170742034912, -6.1511039733887], [-81.093238830566, -6.1969909667969], [-81.088144302368, -6.1995906829834], [-80.907070159912, -6.2755069732666], [-80.690877914429, -6.3638725280762], [-80.633237838745, -6.4003982543945], [-80.60883140564, -6.4155673980713], [-80.590972900391, -6.4292259216309], [-80.562789916992, -6.4600028991699], [-80.558084487915, -6.4643115997314], [-80.553583145142, -6.4676094055176], [-80.476114273071, -6.5164813995361], [-80.337747573853, -6.5927677154541], [-80.211194992065, -6.6527004241943], [-80.163770675659, -6.6731224060059], [-80.144819259644, -6.6844005584717], [-80.021377563477, -6.7959365844727], [-80.009630203247, -6.8255081176758], [-79.993978500366, -6.8821334838867], [-79.992179870605, -6.8872413635254], [-79.989337921143, -6.8931102752686], [-79.98659324646, -6.8974933624268], [-79.971454620361, -6.9186763763428], [-79.967882156372, -6.922945022583], [-79.911605834961, -6.9810848236084], [-79.907377243042, -6.9848670959473], [-79.902708053589, -6.9882583618164], [-79.866546630859, -7.0106372833252], [-79.85089302063, -7.0216007232666], [-79.770778656006, -7.1183891296387], [-79.762718200684, -7.1314105987549], [-79.75982093811, -7.1547565460205], [-79.758157730103, -7.1831111907959], [-79.757362365723, -7.1888160705566], [-79.755706787109, -7.1950702667236], [-79.75325012207, -7.2010955810547], [-79.750032424927, -7.2067852020264], [-79.745607376099, -7.2125701904297], [-79.686870574951, -7.2709732055664], [-79.681318283081, -7.2793064117432], [-79.658536911011, -7.3322429656982], [-79.651580810547, -7.3501319885254], [-79.63588142395, -7.3979682922363], [-79.640422821045, -7.4139060974121], [-79.641532897949, -7.4195384979248], [-79.641977310181, -7.4259014129639], [-79.641624450684, -7.4320106506348], [-79.636280059814, -7.4679145812988], [-79.635200500488, -7.4729442596436], [-79.633142471313, -7.4790992736816], [-79.629981994629, -7.4855289459229], [-79.591592788696, -7.5478992462158], [-79.587549209595, -7.5532474517822], [-79.569530487061, -7.5724430084229], [-79.541227340698, -7.6048736572266], [-79.501739501953, -7.6748142242432], [-79.492378234863, -7.704309463501], [-79.476093292236, -7.7674980163574], [-79.474193572998, -7.7730083465576], [-79.471632003784, -7.7784118652344], [-79.414407730103, -7.8771858215332], [-79.378774642944, -7.9292392730713], [-79.374830245972, -7.9340801239014], [-79.351537704468, -7.958423614502], [-79.327342987061, -7.9792652130127], [-79.247646331787, -8.0449333190918], [-79.241590499878, -8.0487461090088], [-79.236841201782, -8.0510082244873], [-79.219188690186, -8.0581188201904], [-79.205211639404, -8.0656204223633], [-79.193723678589, -8.0765724182129], [-79.035621643066, -8.2465763092041], [-79, -8.3179168701172], [-79, -8.1014652252197], [-79, -7.8850154876709], [-79, -7.6685638427734], [-79, -7.452112197876], [-79, -7.2356624603271], [-79, -7.0192108154297], [-79, -6.7799377441406], [-79, -6.5406646728516], [-79, -6.3013916015625], [-79, -6.0774803161621], [-79, -5.8535671234131], [-79, -5.6296539306641], [-79, -5.4057426452637], [-79, -5.1818294525146], [-79, -4.9579162597656], [-79.01139831543, -4.9722213745117], [-79.036666870117, -4.9955558776855], [-79.063209533691, -5.0003089904785], [-79.100273132324, -4.9750556945801], [-79.183624267578, -4.963888168335], [-79.20361328125, -4.9624996185303], [-79.231918334961, -4.9638500213623], [-79.285705566406, -4.9645843505859], [-79.365570068359, -4.8861103057861], [-79.445037841797, -4.7973957061768], [-79.451675415039, -4.7663879394531], [-79.515281677246, -4.6204166412354], [-79.519729614258, -4.5811805725098], [-79.539169311523, -4.5208339691162], [-79.621391296387, -4.4475002288818], [-79.643203735352, -4.435417175293], [-79.668060302734, -4.43430519104], [-79.705284118652, -4.4570827484131], [-79.783760070801, -4.4819450378418], [-79.815635681152, -4.4788188934326], [-79.997787475586, -4.3730564117432], [-80.025146484375, -4.3549995422363], [-80.05876159668, -4.3195819854736], [-80.077926635742, -4.3001384735107], [-80.13459777832, -4.2844905853271], [-80.174583435059, -4.2985420227051], [-80.186538696289, -4.3212509155273], [-80.22639465332, -4.364444732666], [-80.262222290039, -4.3974990844727], [-80.334175109863, -4.4524993896484], [-80.358619689941, -4.46555519104], [-80.390563964844, -4.4786109924316], [-80.409729003906, -4.4716663360596], [-80.463760375977, -4.4418067932129], [-80.481254577637, -4.4164581298828], [-80.480003356934, -4.3884735107422], [-80.431121826172, -4.3155555725098], [-80.399169921875, -4.2818050384521], [-80.382926940918, -4.2634716033936], [-80.340278625488, -4.1995143890381], [-80.382926940918, -4.1966667175293], [-80.41056060791, -4.2098617553711], [-80.44556427002, -4.2211799621582], [-80.464584350586, -4.2075004577637], [-80.480766296387, -4.174165725708], [-80.483612060547, -4.114444732666], [-80.501220703125, -4.0553455352783], [-80.501678466797, -4.0502777099609], [-80.465423583984, -3.9852771759033], [-80.420288085938, -3.9780559539795], [-80.389175415039, -3.9790267944336], [-80.345703125, -3.9982643127441], [-80.318962097168, -4.0116672515869], [-80.292236328125, -3.9961109161377], [-80.17529296875, -3.90305519104],
                ],
            ],
        ];
    }
}
