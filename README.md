# Curso de Orientação a objetos

## Aula 01 

* Objeto = coisa **material** ou `abstrata` que pode ser percebida pelos sentidos e descrita por meio das suas **características**, **comportamento** e **estado** atual.
* uma classe tem sempre que responder a três perguntas: coisas que eu tenho, coisas que eu faço, como eu estou agora.
* atributos do objeto são as respostas da pergunta coisas que eu tenho.
* métodos do objeto são as resposta da pergunta coisas que eu faço.
* estado do objeto são as respostas da pergunto como eu estou agor.
* Classe = define os atributos e métodos comuns que serão compartilhados por um objeto.
* Objeto = é a instância de um classe.

## Aula 2 

* Diagrama de Classes: toda classe vai ser representada como um retângulo:
	* O retângulo será dividido em três partes:
		* a primeira terá o nome da classe em negrito e 1° letra em maiusculo
		* a segunda terá os atributos da classe
		* a terceira terá os métodos da classe

* Modificadores de Visibilidade: 
	* Indicam o nível de acesso aos componentes internos de uma classe.	
	* Vai dizes qual é o nível de acesso que vc tem a eles.
	* São utilizados 3 símbolos para indicar a visibilidade:
		* `+` = visibilidade pública.
			1. todo atributo ou método que for definido como público:
			 a classe atual e todas as outras classes podem ter acesso 
		* `-` = visibilidade privada:
			1. todo atributo ou método que for definido como privado: somente a classe atual terá acesso
		* `#` = visibilidade protegida:
			1. todo atributo ou método que for definido como privado: somente a classe atual e suas sub-classes podem ter acesso

## Aula 3

* Métodos Acessores **(Getters)** = são métodos que dão acesso a uma determinada coisa que está dentro do objeto.
	* O método acessor usa o comando `get` para pegar algo, por exemplo: conta.getsaldo, que pega o valor do **atributo** saldo do objeto **conta**.
	* Normalmente  `get` também é usado dentro de um método para dar acesso a um determinado atributo sem dar um acesso direto a ele.
* Métodos Modificadores **(Setters)** = são métodos que modificam coisas que estão dentro do objeto.
	* Normalmente precisam de um parâmetro para funcionar.
	* Normalmente usado dentro de um método, assim se passa o que é preciso mudar ou acrescentar e o própio método faz, sem dar um acesso direto ao atributo.
* Método Construtos **(Construct)** = é um método que modifica algo no objeto sem que o usuário faça uma chamada, que faça automáticamente ao instanciar um objeto.
	* Quando um objeto é instanciado a partir de uma classe que contenha um método construtor, será executado automáticamente o método, fazendo as mudanças específicadas nele automáticamente. 
	* Caso o método precise de parâmetros, será necessário coloca-los ao instanciar o objeto.

## Aula 4 
* Exemplo Prático

## Aula 5

* Pilares da POO :
	* Encapsulamento
	* Herança
	* Polimorfismo
	* Sigla para lembrar **EHP**, sua impressora `É HP`
* 1° Pilar - **Encapsulamento**:
	* Tem a ver com **capsula**, que tem a ver com **padrão**
	* Um software encapsulado tem a mesma capsula, tem o mesmo **padrão**
	* Não importa como eu vou fazer o código, o que vai estar dentro da capsula, e sim que o resultado seja sempre o mesmo, tenha a mesma capsula, o mesmo padrão
	* Conceito **Encapsular**:
		* Ocultar partes independentes da implementação, permitindo construir partes invisíveis ao mundo exterior	 
	* O programa consegue se comunicar com a capsula, o objeto, através de mensagens
	* O canal de comunicação externa de um objeto é chamado de **interface**
	* Conceito **Interface**:
		* Lista de serviços fornecidos por um componente. É o contato com o mundo exterior, que define o que pode ser feito com um objeto dessa classe	
	* Vantagens em **Encapsular**:
		1. Tornar mudanças invisíveis
		2. Facilitar reutilização do código
		3. Reduzir efeitos colaterais
* Como Encapuslar: 
	* A interface é representada semelhante ao diagrama de classes, porém só terá métodos. Na parte superior ficará o nome da interface, e na parte inferior os métodos. 
	* Os métodos utilizados na interface são chamados de métodos abstratos. Os métodos abstratos são previstos, mas não implementados. Todos os métodos abstratos tem visibilidadde pública
	* Após criar a interface, você cria a classe. Para incapsular, primeiro você define todos os atributos como privados
	* Normalmente a interface é definida em um arquivo separado      	 

## Aula 6

* Criação de Classe para a próxima aula.

## Aula 7


## Aula 8

* Exercícios teóricos

## Aula 9

* Conceito herança: permite basear uma nova classe na definição de uma outra classe previamente existente
* A herança será aplicada tanto para os atributos quanto para os métodos
* A classe mãe também pode ser chamada de progenitora ou superclasse
* A classe filha também pode ser chamada de subclasse

## Aula 11

* A classe que não tem uma super classe é chamada de **classe raiz**. Ela é a raiz da árvore hierarquica.
* A classe que tem uma super classe é chamada de **folha**.
* Uma classe pode ser uma progenitora e uma sub-classe ao mesmo tempo.
* Uma classe é considerada descendente de todas as outras que estão acima do nível hierarquico da sua progenitora.
* Uma classe é considerada ancestral de todas as classe que estão abaixo do nível hierarquico das suas filhas.
* Quando você percorre a árvore hierarquica de cima pra baixo, você está fazendo uma **especialização**.
* Quando você percorre a árvore hierarquica de baixo pra cima, você está fazendo uma **generalização**.

### Tipos de Herança
#### Herança de Implementação

* A herança de implementação é basicamente para implementar uma classe abstrata.
* A sub-classe não vai ter nada de novo em relação a progenitora.

#### Herança para Diferença

* A sub-classe recebe os atributos e métodos da progenitora, porém também implementos novos.

### Conceitos Abstrato e Final

#### Classe Abstrata

* Uma classe abstrata não pode ser instanciada. Só pode servir como progenitora.

### Método Abstrato

* Declarado, mas não implementado na progenitora.
* Um método abstrato só pode ser colocado dentro de uma interfacce ou de uma classe abstrata.

#### Classe Final

* A classe final não pode ser herdada por outra classe. Obrigatoriamente folha.
* Não pode ter filhos.

### Método Final

* Não pode ser sobrescrito pelas suas sub-classes. Obrigatoriamente herdado.

## Aula 12

* Polimorfismo = muitas formas.
* Polimorfismo -> Permite que um **mesmo nome** represente **vários comportamentos** diferentes.

### Assinatura do Método
* Quantidade e os tipos dos parâmetros
	* Dois métodos terão a mesma assinatura quando tiverem a mesma quantidade de parâmetros,e eles por fim tiverem os mesmo tipos. Por exemplo: suponhamos os métodos `calcMedia(n1: Real, n2: Real): Real` e `calcMedia(n1: Real, n2: Real): Inteiro`. Eles possuem a mesma assinatura pois possuem a mesma quantidade de parâmetros e eles possuem o mesmo tipo. Não importa o tipo do valor que o método vai retornar, só importa a quantidade e os tipos dos parâmetros.
	* Suponhamos outro método: `calcMedia(bim: Inteiro, n1: Real, n2: Real): Real`. Não se pode dizer que esse tem a mesma assinatura dos anteriores pois ele possui um parâmetro a mais.

### Tipos de Polimorfismo

#### Sobreposição
* Quando se têm uma superclasse(criada para servir como herança) e ela contém métodos abstratos, é necessário desenvolver, sobrepor esses métodos nas classes que são extendidas dessa superclasse, desenvolvendo como essa classes executa esse método. Diferentes classes podem ter diferentes execuções do método.
* Acontece quando **substituímos** um método de uma superclasse na sua subclasse , usando a **mesma assinatura**.
* A sobreposição tem que acontecer em **classes diferentes**.

#### Sobrecarga
* Se desenvolve as classes abstratas da superclasse.
* Podem ter  mais de um método, sendo eles com **assinaturas diferentes**.
* Acontecem na mesma classe.

