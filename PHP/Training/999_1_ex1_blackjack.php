<?php
//블랙잭 게임
//-카드 숫자를 합쳐 가능한 21에 가깝게 만들면 이기는 게임

//1. 게임 시작시 유저와 딜러는 카드를 2개 받는다.
// 1-1. 이때 유저 또는 딜러의 카드 합이 21이면 결과 출력
//2. 카드 합이 21을 초과하면 패배
// 2-1. 유저 또는 딜러의 카드의 합이 21이 넘으면 결과 바로 출력
//4. 카드의 계산은 아래의 규칙을 따른다.
// 4-1.카드 2~9는 그 숫자대로 점수
// 4-2. K·Q·J,10은 10점
// 4-3. A는 1점 또는 11점 둘 중의 하나로 계산
//5. 카드의 합이 같으면 다음의 규칙에 따름
// 5-1. 카드수가 적은 쪽이 승리
// 5-2. 카드수가 같을경우 비긴다.

class BlackJack
{
	private $arr_num;
	private $arr_shape;
	private $arr_deck;
	private $user_cards;
    private $dealer_cards;
    private $used_cards;

	// construct
	public function __construct()
	{
		$this->arr_num = array( "A", "2", "3", "4", "5", "6", "7", "8", "9", "10", "J", "Q", "K");
		$this->arr_shape = array("♠", "♣", "◆", "♥");
		$this->set_deck();
	}

	// set
	private function set_deck()
	{
		// 카드 52장 덱에 셋팅
		foreach( $this->arr_shape as $shape )
		{
			foreach( $this->arr_num as $num )
			{
				$this->arr_deck[] = $num.$shape;
			}
		}
		// 덱 셔플
		shuffle( $this->arr_deck );
	}

	// 카드 뽑기
    private function draw_card()
    {
        $card = array_shift( $this->arr_deck );
        $this->used_cards[] = $card;
        return $card;
    }

    // 카드 합 계산
    private function calculate_score( $cards )
    {
        $score = 0;
        $num_of_ace = 0;

        foreach( $cards as $card )
        {
            $num = substr( $card, 0, -3 );
            if( $num == 'A' )
            {
                $num_of_ace++;
                $score += 11;
            }
            else if( $num == 'K' || $num == 'Q' || $num == 'J' || $num == '10' )
            {
                $score += 10;
            }
            else
            {
                $score += intval( $num );
            }
        }

        while( $score > 21 && $num_of_ace > 0 )
        {
            $score -= 10;
            $num_of_ace--;
        }

        return $score;
    }

    // 게임 시작
    public function start_game()
    {
        echo "Welcome to BlackJack!\n\n";

        // 카드 2장씩 받기
        $this->user_cards[] = $this->draw_card();
        $this->dealer_cards[] = $this->draw_card();
        $this->user_cards[] = $this->draw_card();
        $this->dealer_cards[] = $this->draw_card();

        $user_score = $this->calculate_score( $this->user_cards );
        $dealer_score = $this->calculate_score( $this->dealer_cards );

        // 유저 블랙잭
        if( $user_score == 21 )
        {
            echo "User has BlackJack!\nUser Cards: ".implode( ", ", $this->user_cards )."\n\nUser wins!";
			exit;
		}
	
		// 딜러 블랙잭
		if( $dealer_score == 21 )
		{
			echo "Dealer has BlackJack!\nUser Cards: ".implode( ", ", $this->user_cards )."\n\nDealer wins!";
			exit;
		}
	
		// 유저가 버스트인 경우
		if( $user_score > 21 )
		{
			echo "User is busted!\nUser Cards: ".implode( ", ", $this->user_cards )."\n\nDealer wins!";
			exit;
		}
	
		// 딜러가 버스트인 경우
		if( $dealer_score > 21 )
		{
			echo "Dealer is busted!\nUser Cards: ".implode( ", ", $this->user_cards )."\n\nUser wins!";
			exit;
		}
	
		// 카드 합 비교
		if( $user_score > $dealer_score )
		{
			echo "User score > Dealer score!\nUser Cards: ".implode( ", ", $this->user_cards )."\n\nUser wins!";
		}
		elseif( $user_score < $dealer_score )
		{
			echo "User score < Dealer score!\nUser Cards: ".implode( ", ", $this->user_cards )."\n\nDealer wins!";
		}
		else
		{
			echo "It's a tie!\n";
		}
		exit;
	}
	

	}
	
	$obj_bj = new BlackJack();
	$obj_bj->start_game();


// TODO : debug
// public function debug()
// {
// 	var_dump( $this->arr_deck );
// }

// $obj_bj->debug();


//while(true) {
//	echo '시작';
//	print "\n";
//	fscanf(STDIN, "%d\n", $input);        
//	if($input === 0) {
//		break;
//	}
//	echo $input;
//	print "\n";
//}
//echo "끝!\n";