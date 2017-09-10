<?php

$hierarquia = array(
	array(

		'nome_cargo' => 'CEO',
		'subordidados' => array(
			//Inicio: Diretor Comercial
			array(
				'nome_cargo' =>'Diretor Comercial',
				'subordidados' => array(
					//Inicio: Diretor Vendas
					array(
						'nome_cargo'=>'Gerente de Vendas'
					)
					//Termino: Diretor Vendas
				)
			),
			//Termino: Direotor Comercial
			//Inicio: Diretor Financeiro
			array(
				'nome_cargo' => 'Diretor Financeiro',
				'subordidados' => array(
					//Inicio: Gerente de Contas a Pagar
					array(
						'nome_cargo'=>'Gerente de Contas a Pagar',
						'subordidados'=> array(
							//incio: Supervisor de pagamentos
							array(
								'nome_cargo'=>'Supervisor de pagamentos'
							)
							//Termino: supervisor de pagamentos
						)
					),
					//Termino: Gerente de Contas a Pagar
					//Incio: Gerente de Compras
					array(
						'nome_cargo'=>'Gerente de Compras',
						'subordidados'=>array(
							//Inicio:Supervisor de Suprimentos
							array(
								'nome_cargo'=>'Supervisor de Suprimentos'
							)
							//Termino: Supervisor de Suprimentos

							)

						)

					//Termino: Gerente de Compras
				)
			)
			//Termino: Gerente de Contas a Pagar
		)
	)
);

function exibe ($cargos){

	$html = '<ul>';

		foreach ($cargos as $cargos) {
			
			$html .="<li>";

			$html .= $cargos ['nome_cargo'];

			if (isset($cargos['subordidados']) && count($cargos['subordidados']) > 0) {

				$html .= exibe($cargos['subordidados']);
			}

			$html .="</li>";

		}

	$html .= "</ul>";

	return $html ;

}

echo exibe($hierarquia)

?>