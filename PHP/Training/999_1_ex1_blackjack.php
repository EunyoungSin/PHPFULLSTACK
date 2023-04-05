<?php
//블랙잭 게임
//-카드 숫자를 합쳐 가능한 21에 가깝게 만들면 이기는 게임

// 1. 게임 시작시 유저와 딜러는 카드를 2개 받는다.
// 1-1. 이때 유저 또는 딜러의 카드 합이 21이면 결과 출력
// 2. 카드 합이 21을 초과하면 패배
// 2-1. 유저 또는 딜러의 카드의 합이 21이 넘으면 결과 바로 출력
// 4. 카드의 계산은 아래의 규칙을 따른다.
// 4-1.카드 2~10은 그 숫자대로 점수
// 4-2. K·Q·J는 10점
// 4-3. A는 1점 또는 11점 둘 중의 하나로 계산
// 5. 카드의 합이 같으면 다음의 규칙에 따름
// 5-1. 카드수가 적은 쪽이 승리
// 5-2. 카드수가 같을경우 드로우
// 6. 유저가 카드를 받을 때 딜러는 아래의 규칙을 따른다.
// 6-1. 딜러는 카드의 합이 17보다 낮을 경우 카드를 더 받음
// 6-2. 17 이상일 경우는 받지 않는다.
// 7. 1입력 : 카드 더받기, 2입력 : 카드비교, 0입력 : 게임종료
// 8. 한 번 사용한 카드는 다시 쓸 수 없다.

// while(true) {
// 	echo '시작';
// 	print "\n";
// 	fscanf(STDIN, "%d\n", $input);        
// 	if($input === 0) {
// 		break;
// 	}
// 	echo $input;
// 	print "\n";
// }
// echo "끝!\n";


class Blackjack {
    private $deck;  // 카드 덱
    private $player;  // 유저
    private $dealer;  // 딜러
    private $winner;  // 승자
    
    public function __construct() {
    $this->deck = array();
    $this->player = array();
    $this->dealer = array();
    $this->winner = null;
    
    // 카드 덱 초기화
    $suits = array('spades', 'hearts', 'clubs', 'diamonds');
    $ranks = array('2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K', 'A');
    foreach ($suits as $suit) {
    foreach ($ranks as $rank) {
        $this->deck[] = array('suit' => $suit, 'rank' => $rank);
    }
    }
}

public function start() {
    // 카드 덱 섞기
    shuffle($this->deck);
    
    // 유저와 딜러가 카드 2장씩 받음
    for ($i = 0; $i < 2; $i++) {
    $this->player[] = array_shift($this->deck);
    $this->dealer[] = array_shift($this->deck);
    }
    
    // 카드 합이 21인지 확인
    if ($this->calculateHand($this->player) == 21 || $this->calculateHand($this->dealer) == 21) {
    $this->winner = ($this->calculateHand($this->player) == 21) ? 'player' : 'dealer';
    $this->end();
    return;
    }
}

public function hit() {
    // 유저가 카드를 더 받음
    $this->player[] = array_shift($this->deck);
    
    // 카드 합이 21을 초과하면 딜러가 이김
    if ($this->calculateHand($this->player) > 21) {
    $this->winner = 'dealer';
    $this->end();
    return;
    }
}

public function stand() {
    // 딜러의 카드 합이 17 이상이 될 때까지 카드 더 받기
    while ($this->calculateHand($this->dealer) < 17) {
    $this->dealer[] = array_shift($this->deck);
    }
    
    // 카드 합이 21을 초과하면 유저가 이김
    if ($this->calculateHand($this->dealer) > 21) {
    $this->winner = 'player';
    } else {
    // 카드 합이 같으면 카드 수가 적은 쪽이 이김, 같으면 드로우
    $playerHand = $this->calculateHand($this->player);
    $dealerHand = $this->calculateHand($this->dealer);
    if ($playerHand == $dealerHand) {
        $this->winner = (count($this->player) < count($this->dealer)) ? 'player' : ((count($this->dealer) < count($this->player)) ?

        // 카드 합이 21을 초과하지 않으면, 카드 합이 더 높은 쪽이 이김
if ($this->calculateHand($this->player) <= 21 && ($this->calculateHand($this->dealer) < $this->calculateHand($this->player) || $this->calculateHand($this->dealer) > 21))
{
$this->winner = 'player';
}
else {
$this->winner = 'dealer';
}
}

// 게임 결과 출력
public function printResult() {
if ($this->winner == 'player') {
echo "You win!\n";
} else if ($this->winner == 'dealer') {
echo "Dealer wins!\n";
} else {
echo "It's a draw!\n";
}
}
    
    // 게임 시작
    $game = new Blackjack();
    $game->start();
?>