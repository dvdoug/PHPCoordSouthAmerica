<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * South America/Peru - 78°W to 72°W.
 * @internal
 */
class Extent3838
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [-75.137016296387, -0.045347213745117], [-75.205009460449, -0.036874771118164], [-75.216674804688, -0.068332672119141], [-75.22590637207, -0.095972061157227], [-75.259147644043, -0.12247848510742], [-75.285842895508, -0.11972236633301], [-75.305282592773, -0.13472175598145], [-75.349731445312, -0.15124893188477], [-75.425010681152, -0.16430473327637], [-75.479873657227, -0.14374923706055], [-75.519027709961, -0.11687469482422], [-75.615814208984, -0.10651969909668], [-75.624496459961, -0.17202949523926], [-75.571189880371, -0.18013763427734], [-75.481117248535, -0.23236083984375], [-75.464736938477, -0.27361106872559], [-75.459167480469, -0.29500007629395], [-75.448616027832, -0.3463191986084], [-75.434448242188, -0.3841667175293], [-75.413345336914, -0.41958236694336], [-75.389450073242, -0.44694328308105], [-75.363891601562, -0.46666526794434], [-75.339797973633, -0.46465301513672], [-75.262512207031, -0.52305603027344], [-75.244384765625, -0.56097221374512], [-75.249031066895, -0.62958335876465], [-75.266967773438, -0.64603996276855], [-75.277236938477, -0.65027809143066], [-75.283432006836, -0.65621376037598], [-75.292785644531, -0.73055458068848], [-75.263336181641, -0.81472206115723], [-75.216842651367, -0.9693660736084], [-75.330429077148, -0.97972106933594], [-75.359588623047, -0.96777725219727], [-75.376953125, -0.95083236694336], [-75.402236938477, -0.92277717590332], [-75.431945800781, -1.0380554199219], [-75.44416809082, -1.0855560302734], [-75.461669921875, -1.1536102294922], [-75.483612060547, -1.241943359375], [-75.518615722656, -1.3779163360596], [-75.553619384766, -1.5138893127441], [-75.563949584961, -1.5399551391602], [-75.588180541992, -1.5557060241699], [-75.627281188965, -1.5963745117188], [-75.7197265625, -1.7080554962158], [-75.781402587891, -1.7819442749023], [-75.879455566406, -1.8991661071777], [-75.977508544922, -2.0163879394531], [-76.074172973633, -2.1311111450195], [-76.239036560059, -2.2556934356689], [-76.403900146484, -2.380277633667], [-76.532264709473, -2.4762058258057], [-76.660629272461, -2.5721340179443], [-76.782539367676, -2.6144008636475], [-76.904449462891, -2.656665802002], [-77.043334960938, -2.7047214508057], [-77.224166870117, -2.7672214508057], [-77.439727783203, -2.8413887023926], [-77.617088317871, -2.9023609161377], [-77.794448852539, -2.9633331298828], [-77.810241699219, -2.9681549072266], [-77.859588623047, -2.9858322143555], [-77.925384521484, -3.0399608612061], [-78, -3.1194667816162], [-78, -3.3675632476807], [-78, -3.6156597137451], [-78, -3.8637561798096], [-78, -4.111852645874], [-78, -4.3599491119385], [-78, -4.6080455780029], [-78, -4.8561420440674], [-78, -5.1042385101318], [-78, -5.3523349761963], [-78, -5.6004314422607], [-78, -5.7387466430664], [-78, -5.8770618438721], [-78, -6.1036949157715], [-78, -6.3303279876709], [-78, -6.5569610595703], [-78, -6.7835941314697], [-78, -6.9649219512939], [-78, -7.1462497711182], [-78, -7.3275775909424], [-78, -7.3625774383545], [-78, -7.5120048522949], [-78, -7.6614322662354], [-78, -7.8926734924316], [-78, -8.1239166259766], [-78, -8.3551578521729], [-78, -8.5864009857178], [-78, -8.8176441192627], [-78, -9.048885345459], [-78, -9.2801284790039], [-78, -9.5113697052002], [-78, -9.7426128387451], [-78, -9.97385597229], [-78, -10.205097198486], [-78, -10.436340332031], [-78, -10.523027420044], [-78, -10.762353897095], [-78, -11.001680374146], [-78, -11.241006851196], [-78, -11.480331420898], [-78, -11.719657897949], [-78, -11.958984375], [-78, -12.198310852051], [-78, -12.437637329102], [-78, -12.68207359314], [-78, -12.926509857178], [-78, -13.170946121216], [-78, -13.415380477905], [-78, -13.659816741943], [-78, -13.904253005981], [-78, -14.14868927002], [-78, -14.393125534058], [-78, -14.637561798096], [-78, -14.881998062134], [-78, -15.126434326172], [-78, -15.37087059021], [-78, -15.615306854248], [-78, -15.859743118286], [-78, -16.104179382324], [-78, -16.348615646362], [-78, -16.5930519104], [-78, -16.837488174438], [-78, -17.081924438477], [-78, -17.326360702515], [-77.98791885376, -17.334615707397], [-77.974863052368, -17.347345352173], [-77.861806869507, -17.504932403564], [-77.719633102417, -17.642959594727], [-77.577457427979, -17.780986785889], [-77.435283660889, -17.919013977051], [-77.434019088745, -17.919870376587], [-77.419261932373, -17.934158325195], [-77.253545761108, -18.046197891235], [-77.087829589844, -18.158235549927], [-76.92211151123, -18.270273208618], [-76.913274765015, -18.274248123169], [-76.884801864624, -18.293437957764], [-76.884006500244, -18.293794631958], [-76.883785247803, -18.293943405151], [-76.853240966797, -18.307670593262], [-76.819200515747, -18.330595016479], [-76.812700271606, -18.333515167236], [-76.810111999512, -18.335258483887], [-76.808183670044, -18.336122512817], [-76.807062149048, -18.336879730225], [-76.803731918335, -18.338373184204], [-76.802040100098, -18.339513778687], [-76.801357269287, -18.339820861816], [-76.800006866455, -18.340728759766], [-76.799411773682, -18.340995788574], [-76.798006057739, -18.341941833496], [-76.777814865112, -18.351003646851], [-76.724609375, -18.374881744385], [-76.710872650146, -18.384113311768], [-76.659420013428, -18.384113311768], [-76.525699615479, -18.455587387085], [-76.342653274536, -18.539087295532], [-76.271095275879, -18.588258743286], [-76.085859298706, -18.703447341919], [-76.027795791626, -18.736200332642], [-76.003082275391, -18.749816894531], [-75.868772506714, -18.819889068604], [-75.810638427734, -18.847862243652], [-75.792999267578, -18.856140136719], [-75.688112258911, -18.929170608521], [-75.50287437439, -19.044357299805], [-75.310501098633, -19.147184371948], [-75.111814498901, -19.23720741272], [-74.927515029907, -19.307235717773], [-74.817937850952, -19.345203399658], [-74.709310531616, -19.401271820068], [-74.52027130127, -19.487281799316], [-74.492277145386, -19.498979568481], [-74.459468841553, -19.518171310425], [-74.267095565796, -19.620998382568], [-74.068408966064, -19.71102142334], [-73.992000579834, -19.741571426392], [-73.978319168091, -19.750762939453], [-73.930196762085, -19.782320022583], [-73.918132781982, -19.791620254517], [-73.888284683228, -19.814258575439], [-73.807844161987, -19.909519195557], [-73.761583328247, -20.060005187988], [-73.715322494507, -20.21049118042], [-73.537227630615, -20.330375671387], [-73.359132766724, -20.450258255005], [-73.181037902832, -20.570142745972], [-73.00294303894, -20.690027236938], [-72.824848175049, -20.809909820557], [-72.646755218506, -20.929794311523], [-72.468660354614, -21.04967880249], [-72.351493835449, -20.896284103394], [-72.234329223633, -20.742889404297], [-72.117164611816, -20.589496612549], [-72, -20.436101913452], [-72, -20.187728881836], [-72, -19.93935585022], [-72, -19.690982818604], [-72, -19.442609786987], [-72, -19.19423866272], [-72, -18.945865631104], [-72, -18.697492599487], [-72, -18.449119567871], [-72, -18.200746536255], [-72, -17.952373504639], [-72, -17.704000473022], [-72, -17.455629348755], [-72, -17.207256317139], [-72, -16.958883285522], [-72, -16.710510253906], [-72, -16.46213722229], [-72, -16.213764190674], [-72, -15.965391159058], [-72, -15.71702003479], [-72, -15.468647003174], [-72, -15.220273971558], [-72, -14.971900939941], [-72, -14.723527908325], [-72, -14.475154876709], [-72, -14.226781845093], [-72, -13.978410720825], [-72, -13.730037689209], [-72, -13.481664657593], [-72, -13.233291625977], [-72, -12.98491859436], [-72, -12.736545562744], [-72, -12.488172531128], [-72, -12.23980140686], [-72, -11.991428375244], [-72, -11.743055343628], [-72, -11.494682312012], [-72, -11.246309280396], [-72, -10.997936248779], [-72, -10.749563217163], [-72, -10.501190185547], [-72, -10.252819061279], [-72, -10.004446029663], [-72.010284423828, -10.004446029663], [-72.052230834961, -10.004722595215], [-72.143890380859, -10.004722595215], [-72.185836791992, -10.002500534058], [-72.168334960938, -9.9544448852539], [-72.150772094727, -9.8870143890381], [-72.164733886719, -9.8347225189209], [-72.180282592773, -9.8034038543701], [-72.226531982422, -9.7777786254883], [-72.260353088379, -9.7591667175293], [-72.269309997559, -9.7305564880371], [-72.25764465332, -9.692569732666], [-72.252510070801, -9.6569442749023], [-72.301528930664, -9.5331954956055], [-72.371673583984, -9.492639541626], [-72.402236938477, -9.4836120605469], [-72.606948852539, -9.4461116790771], [-72.730010986328, -9.4130573272705], [-72.840835571289, -9.4116668701172], [-72.861953735352, -9.412223815918], [-72.980834960938, -9.4108333587646], [-73, -9.4099559783936], [-73.200698852539, -9.400764465332], [-73.182929992676, -9.3649997711182], [-73.158065795898, -9.344446182251], [-73.119445800781, -9.3133335113525], [-73.023620605469, -9.2211112976074], [-73, -9.1888904571533], [-72.966400146484, -9.1430568695068], [-72.955291748047, -9.1191673278809], [-72.949172973633, -9.0901393890381], [-72.948059082031, -9.0665283203125], [-72.951126098633, -9.0458335876465], [-72.962364196777, -8.9884719848633], [-73, -8.9380722045898], [-73.005767822266, -8.930347442627], [-73.058822631836, -8.9024314880371], [-73.121948242188, -8.8075008392334], [-73.132781982422, -8.7905559539795], [-73.141952514648, -8.7622222900391], [-73.15251159668, -8.7350006103516], [-73.16667175293, -8.7141666412354], [-73.183898925781, -8.7001399993896], [-73.215560913086, -8.6861114501953], [-73.240982055664, -8.6795825958252], [-73.273338317871, -8.6742362976074], [-73.345703125, -8.6023616790771], [-73.404724121094, -8.4505558013916], [-73.478622436523, -8.3986129760742], [-73.533203125, -8.3523616790771], [-73.541397094727, -8.3027782440186], [-73.556671142578, -8.2491683959961], [-73.595703125, -8.1213893890381], [-73.651672363281, -8.0166664123535], [-73.709869384766, -7.9838886260986], [-73.756324768066, -7.9670829772949], [-73.771957397461, -7.948055267334], [-73.777015686035, -7.8728809356689], [-73.725387573242, -7.8795833587646], [-73.698204040527, -7.8461799621582], [-73.693756103516, -7.8033332824707], [-73.706665039062, -7.776388168335], [-73.724166870117, -7.7644443511963], [-73.751953125, -7.7569446563721], [-73.82154083252, -7.7316665649414], [-73.842231750488, -7.7173614501953], [-73.851951599121, -7.6995830535889], [-73.865562438965, -7.6752777099609], [-73.932510375977, -7.609167098999], [-73.974166870117, -7.5744438171387], [-74.004592895508, -7.5543746948242], [-74.002151489258, -7.5304508209229], [-73.987152099609, -7.5288333892822], [-73.962432861328, -7.5273609161377], [-73.930526733398, -7.442985534668], [-73.931121826172, -7.359167098999], [-73.73819732666, -7.3339576721191], [-73.705841064453, -7.3092365264893], [-73.720001220703, -7.2230548858643], [-73.775566101074, -7.1372222900391], [-73.795135498047, -7.1226234436035], [-73.799728393555, -7.0808334350586], [-73.754455566406, -6.8941669464111], [-73.744171142578, -6.8769435882568], [-73.676391601562, -6.8044452667236], [-73.587509155273, -6.7350006103516], [-73.474349975586, -6.6584930419922], [-73.361190795898, -6.5819873809814], [-73.335006713867, -6.5744438171387], [-73.298759460449, -6.5744457244873], [-73.276397705078, -6.5750007629395], [-73.216674804688, -6.5666675567627], [-73.18611907959, -6.5473613739014], [-73.160842895508, -6.5155563354492], [-73.145004272461, -6.4891662597656], [-73.123901367188, -6.4472217559814], [-73.120010375977, -6.4180564880371], [-73.118621826172, -6.3815269470215], [-73.166397094727, -6.2402782440186], [-73.218612670898, -6.1462497711182], [-73.225570678711, -6.1213893890381], [-73.229736328125, -6.0936107635498], [-73.218063354492, -6.0452785491943], [-73.20556640625, -6.0174999237061], [-73.130279541016, -5.8763885498047], [-73.082229614258, -5.8272228240967], [-73.048065185547, -5.7919445037842], [-73, -5.7267360687256], [-72.988891601562, -5.7116661071777], [-72.961952209473, -5.6486110687256], [-72.94278717041, -5.5375003814697], [-72.952568054199, -5.5102767944336], [-72.964172363281, -5.477222442627], [-72.961395263672, -5.4524993896484], [-72.918334960938, -5.3216667175293], [-72.898620605469, -5.1727771759033], [-72.851959228516, -5.1247215270996], [-72.786666870117, -5.088888168335], [-72.75666809082, -5.0769443511963], [-72.61750793457, -5.0202770233154], [-72.476959228516, -4.9411106109619], [-72.403335571289, -4.8745136260986], [-72.390563964844, -4.8386116027832], [-72.389595031738, -4.8056945800781], [-72.375289916992, -4.78444480896], [-72.325286865234, -4.7608337402344], [-72.300979614258, -4.7569904327393], [-72.279174804688, -4.7636108398438], [-72.253616333008, -4.7616672515869], [-72.235000610352, -4.7533340454102], [-72.129180908203, -4.6936111450195], [-72.028060913086, -4.6124992370605], [-72, -4.5914249420166], [-72, -4.3665084838867], [-72, -4.1415939331055], [-72, -3.9210453033447], [-72, -3.700496673584], [-72, -3.4799480438232], [-72, -3.2593994140625], [-72, -3.0388507843018], [-72, -2.818302154541], [-72, -2.5977535247803], [-72, -2.3772048950195], [-72.070007324219, -2.4077777862549], [-72.227508544922, -2.4988880157471], [-72.299453735352, -2.4913883209229], [-72.327781677246, -2.4830551147461], [-72.450836181641, -2.4413890838623], [-72.583000183105, -2.4089756011963], [-72.590148925781, -2.4072208404541], [-72.660036087036, -2.4318046569824], [-72.683334350586, -2.4400005340576], [-72.74903678894, -2.4650001525879], [-72.814735412598, -2.4899997711182], [-72.848342895508, -2.4981937408447], [-72.881958007812, -2.5063896179199], [-72.90251159668, -2.4536113739014], [-72.934585571289, -2.3999996185303], [-72.975006103516, -2.4016666412354], [-73, -2.4095840454102], [-73.003067016602, -2.4105548858643], [-73.07389831543, -2.3713893890381], [-73.104736328125, -2.34694480896], [-73.115287780762, -2.3287487030029], [-73.131744384766, -2.2462501525879], [-73.101257324219, -2.2319450378418], [-73.077789306641, -2.2002773284912], [-73.058204650879, -2.1455554962158], [-73.090423583984, -1.9236106872559], [-73.132781982422, -1.8491668701172], [-73.197021484375, -1.8064575195312], [-73.238891601562, -1.8455543518066], [-73.296943664551, -1.8735408782959], [-73.416397094727, -1.8166656494141], [-73.490570068359, -1.7669448852539], [-73.507507324219, -1.7483329772949], [-73.486953735352, -1.6544437408447], [-73.476959228516, -1.6366672515869], [-73.447158813477, -1.6103458404541], [-73.476959228516, -1.5524997711182], [-73.520004272461, -1.4936103820801], [-73.542785644531, -1.4680557250977], [-73.547500610352, -1.4366664886475], [-73.555702209473, -1.3752765655518], [-73.653617858887, -1.28444480896], [-73.71305847168, -1.279167175293], [-73.752235412598, -1.289722442627], [-73.840980529785, -1.2651386260986], [-73.868057250977, -1.208610534668], [-74.077789306641, -1.0727767944336], [-74.215423583984, -1.0348606109619], [-74.240699768066, -1.0129165649414], [-74.255279541016, -0.98666572570801], [-74.282791137695, -0.93027687072754], [-74.264175415039, -0.89888763427734], [-74.247787475586, -0.85361099243164], [-74.290283203125, -0.80972099304199], [-74.316116333008, -0.78166580200195], [-74.338897705078, -0.70638847351074], [-74.358062744141, -0.63305473327637], [-74.37028503418, -0.57755088806152], [-74.376113891602, -0.56805610656738], [-74.393890380859, -0.54333305358887], [-74.556945800781, -0.41777801513672], [-74.607513427734, -0.38360977172852], [-74.632919311523, -0.40652656555176], [-74.708763122559, -0.36166572570801], [-74.715835571289, -0.33361053466797], [-74.716949462891, -0.31166648864746], [-74.721115112305, -0.28972244262695], [-74.733612060547, -0.26097106933594], [-74.749176025391, -0.23555564880371], [-74.772369384766, -0.20791625976562], [-74.791946411133, -0.20027732849121], [-74.812644958496, -0.2056941986084], [-74.841125488281, -0.22527694702148], [-74.860282897949, -0.23250007629395], [-74.938064575195, -0.19888877868652], [-74.960556030273, -0.17055511474609], [-75.021392822266, -0.12305450439453], [-75.137016296387, -0.045347213745117],
                ],
            ],
        ];
    }
}
