<?php
class ContatoFactory {
	public static function create($nome, $email) {
		return new Contato ( $nome, $email );
	}
}
