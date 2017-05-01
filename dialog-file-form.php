<div class="panel panel-default">
	<div class="panel-body">
		<div class="form-group">
			<label for="file-field" class="control-label">Arquivo:</label>
			<input type="file" id="file-field" name="script-file" onchange="aade.readScriptFile(this)" />
		</div>
		<div class="alert alert-info" role="alert">
			Instruções:
			<ul>
				<li>
					Extraia scripts de algum dos jogos da primeira trilogia "Ace Attorney",
					gerados pelas tools do romhacker <i>onepiecefreak</i>;
				</li>
				<li>
					Aguarde o script terminar de ser interpretado. Geralmente leva alguns segundos;
				</li>
				<li>
					Após tê-lo carregado, aparecerão os blocos de diálogo, separados em vários
					campos de texto, seguido de uma prévia ao lado. É o sinal de que já pode
					começar a traduzir;
				</li>
				<li><b>IMPORTANTE</b>: Antes de fechar a tool, lembre-se de salvar o script clicando em "Arquivo -> Salvar Script"¹</li>
			</ul>
			
			<sub>
				1. Essa tool atualmente não realiza a persistência de nada submetido a ela,
				logo cabe ao usuário upar e salvar os scripts periodicamente, enquanto traduz por ela.
				Se o script não for salvo, ele será perdido.
			</sub>
		</div>
	</div>
</div>