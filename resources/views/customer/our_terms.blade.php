
@extends('../layouts/customer')

@section('username')
@if(session('nom') AND session('prenom'))
{{session('prenom')}} {{session('nom')}}
@endif	
@endsection
@section('profile')
@if(session('theuser'))
{{session('prenom')}} {{session('nom')}}
@endif	
@endsection
@php
if(session('theuser'))
{
	$user = session('theuser');

}

@endphp

@section('email')
{{$user->user_email}}
@endsection


@section('content')


<div class="col-lg-12 grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
			<h3 class="">Veuillez lire et accepter les termes de contrat ci dessous pour avoir accès à votre espace.</h3>
			<strong><h4>CONDITIONS GENERALES</h4></strong>
			<p>
				J'autorise THOR TECHNOLOGIE et ses sociétés affiliées à effectuer des travaux de réparation sur mon appareil électronique. Je comprends que THOR TECHNOLOGIE ou ses sociétés affiliées sont des agents de réparation indépendants et non des revendeurs ou fournisseurs de services agréés.<br>
				J'accepte de ne pas tenir THOR TECHNOLOGIE et ses sociétés affiliées de toute responsabilité pour tout dommage de toute nature pouvant découler de tout travail de réparation effectué sur mon appareil électronique.<br>
				Je reconnais que l'appareil que je remets pour réparation est mon appareil et non un bien volé. J'accepte toute responsabilité quant à l'historique de cet appareil. S'il s'avère que l'appareil a été volé, j'accepte de ne pas le récupérer.<br>
					Si un appareil nécessite un démontage détaillé pour un devis, des frais minimums de 25 000 FCFA s'appliqueront. Ce coût peut être soustrait du coût final de la réparation, si vous choisissez d'aller de l'avant. Ce montant n'est pas remboursable.

				</p>
				<strong><h4>Dommages à l'appareil</h4></strong>
				<p>
					Appareils endommagés par des chocs et des écrasements : des fractures microscopiques peuvent survenir et causer des problèmes avec votre appareil. Dans certains cas, lorsque ces fractures sont présentes et que les vis de montage sont retirées, les fractures ne se connectent pas lorsque le dispositif est remonté. Vous acceptez que THOR TECHNOLOGIE ne soit pas responsable si des fractures se sont produites à l'intérieur de votre appareil, ce qui empêche votre appareil de fonctionner d'une manière ou d'une autre, même si ces éléments fonctionnaient avant le démontage.<br>
					Appareils endommagés par des liquides : le temps de récupération peut varier en fonction de l'appareil et de l'étendue des dommages. Toutes les pièces remplacées par des pièces neuves que nous fournissons seront couvertes par la période de garantie indiquée sur la feuille de travail finale. Cette période de garantie ne couvre pas les composants internes principaux ou les pièces qui n'ont pas été remplacées par des pièces neuves. Des dommages progressifs peuvent survenir avec le temps. THOR TECHNOLOGIE n'est pas responsable si votre appareil ne fonctionne pas d'une manière ou d'une autre après la récupération des dommages causés par les liquides. La récupération des dommages causés par les liquides prendra au moins 24 heures, mais dans certains cas, elle peut prendre plus d'une semaine. Ceci est spécifique à l'appareil/à la situation et ne peut pas être prédit. Dans certains cas, le déplacement des dommages causés par le liquide peut empêcher l'appareil de fonctionner d'une manière ou d'une autre (Parfois, les impuretés du liquide sont la seule chose qui maintient un circuit ensemble), dans de tels cas, vous acceptez que THOR TECHNOLOGIE ne soit pas responsable.<br>
					Virus / Appareils infectés : la suppression peut prendre plusieurs jours. THOR TECHNOLOGIE n'est pas responsable si votre appareil est infecté par un virus après une suppression de virus ou un nettoyage complet. Nous ne pouvons pas assurer la pérennité de votre ordinateur ou empêcher d'autres personnes de l'utiliser. C'est le cas quel que soit le logiciel antivirus que vous utilisez.<br>
					Appareils DOA : « Dead On Arrival » ; Pas d'image, batterie à plat, ne s'allume pas ou a un problème grave. L'appareil ne peut être entièrement testé qu'une fois la réparation terminée. THOR TECHNOLOGIE ne sera pas responsable si une fonction de l'appareil ne fonctionne pas partiellement ou en totalité. Par exemple, si votre appareil ne s'allume pas à son arrivée dans notre entreprise et qu'après sa réparation, le son ne fonctionne pas, le problème ne serait PAS une garantie. La politique s'applique à tout ce qui ne peut pas être entièrement testé au moment de la réservation de service (y compris les éléments qui n'ont pas pu être testés parce que le client n'a pas fourni de mots de passe et/ou a fourni des détails incorrects).


					</p>
				<strong><h4>Réparation</h4></strong>
				<p>
					Si des pièces doivent être commandées, le temps de réparation peut varier. Nous n'avons aucun contrôle sur les délais d'affranchissement qui empêchent la réalisation d'un travail. Si quelque chose devait être perdu pendant le transport, nous essayerions de le commander à nouveau à notre discrétion. Les commandes spéciales peuvent nécessiter un acompte. Les acomptes ne sont pas remboursables.<br>
					La plupart des types de verre sont maintenus en place par un adhésif double face. Si la vitre/l'écran se soulèvent/se détachent de quelque façon que ce soit, veuillez nous le retourner immédiatement. Nous ne couvrirons pas la garantie sur un écran cassé d'une manière ou d'une autre, même si la rupture s'est produite après que l'écran a commencé à se soulever. Si le cadre de l'appareil est déformé/plié/torsadé, etc. Nous ferons de notre mieux pour remodeler le cadre afin que le verre/l'écran soit au même niveau. Si l'écran n'est pas à 100 % aligné parce que le cadre est légèrement ou fortement plié ou tordu, vous acceptez qu'il ne s’agît pas d'un problème de garantie et que le remplacement du cadre de votre appareil est le seul moyen de le remettre à 100 % droit. THOR TECHNOLOGIE ne sera pas tenu responsable si votre écran se soulève à cause d'un cadre plié.<br>
					Je comprends si je fais remplacer une pièce à l'intérieur de mon appareil, que si mon écran ou des composants en verre/plastique sur ou dans mon téléphone sont endommagés, cela affectera la résistance de ces pièces et de mon appareil. Ces pièces peuvent s'endommager davantage en raison de la réparation et de la force nécessaire appliquée par le technicien. Je ne tiens pas The THOR TECHNOLOGIE ou ses sociétés affiliées pour responsables si ces pièces sont encore endommagées par rapport à ce qu'elles étaient lorsque j'ai remis l'appareil pour réparation, car leur intégrité structurelle était déjà compromise et la force appliquée était nécessaire pour terminer la réparation que j'ai demandée.

					</p>
					<strong><h4>Données</h4></strong>
					<p>
						Je comprends que THOR TECHNOLOGIE ou ses sociétés affiliées ne sont pas responsables de toute perte de données. Je comprends que je suis responsable de la sauvegarde des données sur mon appareil avant de le soumettre pour réparation. En cas de perte de données et de défaillance matérielle ou logicielle, je ne tiens pas THOR TECHNOLOGIE ou ses sociétés affiliées responsables des conséquences ou des pertes résultant de la perte de données.<br>
						Je comprends que THOR TECHNOLOGIE et ses affiliés ne parcourront aucune information ou donnée personnelle, privée ou confidentielle à moins qu'elles ne soient dirigées ou requises pour la vérification de la réparation.
						Les techniciens peuvent voir par inadvertance des données au cours de leur travail. Je comprends que toutes les données confidentielles doivent être supprimées de l'appareil avant d'effectuer des travaux de réparation.


						</p>
					<strong><h4>Garanties</h4></strong>
					<p>
						La garantie du fabricant peut être ANNULÉE lors de l'ouverture d'un appareil. Vous acceptez que THOR TECHNOLOGIE puisse briser un sceau de garantie lors de l'ouverture de votre appareil. Il est de la responsabilité du client de déterminer si l'appareil est actuellement sous une certaine forme de garantie. Si vous n'êtes pas sûr, veuillez le déterminer avant de commencer toute réparation.<br>
						Je comprends que les réparations ou l'assistance technique effectuées par THOR TECHNOLOGIE ou ses sociétés affiliées peuvent annuler les garanties du fabricant. THOR TECHNOLOGIE et ses affiliés n'assument aucune responsabilité ou garantie en cas d'annulation des garanties du fabricant, mais peuvent, à leur seule discrétion, offrir leur propre garantie sur les pièces et/ou les services effectués. La garantie offerte par THOR TECHNOLOGIE ou ses sociétés affiliées sera annulée si vous écrasez, endommagez, cassez, fissurez ou endommagez votre appareil par un liquide.<br>
						La garantie THOR TECHNOLOGIE est ANNULÉE si votre appareil est ouvert ou réparé par une personne autre que THOR TECHNOLOGIE.<br>
						La garantie THOR TECHNOLOGIE est ANNULÉE si votre appareil subit une quelconque forme de dommage après avoir quitté l’entreprise.
						AUCUNE garantie n'est fournie pour les pièces qui n'ont pas été fournies par THOR TECHNOLOGIE.<br>
						THOR TECHNOLOGIE n'est pas responsable si votre appareil tombe en panne de quelque manière que ce soit dans notre entreprise ou après s'il est parti, sauf si la pièce qui a défectueuse  a été fournie par nous et est sous garantie.<br>
						Si l'appareil tombe en panne et que vous pensez qu'il peut être couvert par la garantie, vous DEVEZ le retourner dans ce délai. Il n'y aura pas d'exceptions.
						La garantie THOR TECHNOLOGIE couvre uniquement le travail effectué pour le défaut déclaré pour lequel l'appareil est soumis. Les défauts non déclarés ne sont pas couverts.<br>
						La garantie THOR TECHNOLOGIE ne couvre pas les nouveaux défauts survenant après le retour de l'appareil.<br>

						Tous les travaux doivent être récupérés dans les 30 jours suivant leur achèvement. Les travaux non collectés au cours de cette période seront considérés comme des "marchandises non collectées
						THOR TECHNOLOGIE n'offre aucune forme de crédit. Votre ou vos appareils ne quitteront pas l’entreprise tant que le paiement n'aura pas été entièrement reçu. En cas d'inversion bancaire ou d'autres complications de paiement, vous serez obligé de payer à THOR TECHNOLOGIE le montant total plus tous les frais encourus immédiatement. <br>
						En soumettant ce formulaire, vous acceptez les termes et conditions ci-dessus, si vous n'acceptez pas les termes ci-dessus, votre travail ne sera pas accepté.
						Ces termes et conditions peuvent changer à tout moment, sans préavis.

						</p>
				<form class="forms-sample" action="/our_terms" method="post">
					@csrf
					<label  class="form-check-label"><b>J'ai lu et j'accepte les conditions d'utilisations</b>
						<input class="checkbox" type="checkbox" required>

					</label>

					<button type="submit" class="btn btn-primary">valider</button>

				</form>
			</div>
		</div>
	</div>

@endsection
