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
//6. 유저가 카드를 받을 때 딜러는 아래의 규칙을 따른다.
// 6-1. 딜러는 카드의 합이 17보다 낮을 경우 카드를 더 받음
// 6-2. 17 이상일 경우는 받지 않는다.
//7. 1입력 : 카드 더받기, 2입력 : 카드비교, 0입력 : 게임종료 
//8. 한번 사용한 카드는 다시 쓸 수 없다.

class BlackJack
{
	private $arr_num;
	private $arr_shape;
	private $arr_deck;
	private $user_cards;
    private $dealer_cards;
    private $used_cards;
    private $available_cards;

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
        $this->available_cards = $this->arr_deck;
        // 덱 셔플
        shuffle( $this->available_cards );
    }
    

	// 카드 뽑기
    private function draw_card()
    {
        $card = array_shift( $this->available_cards );
        $this->used_cards[] = $card;
        return $card;
    }

    // 딜러 카드 뽑기
    // 딜러의 합이 17 이상인 경우 더 이상 카드를 받지 않습니다.
    private function dealer_draw()
    {
        $dealer_score = $this->calculate_score( $this->dealer_cards );
        if( $dealer_score < 17 ) {
            $this->dealer_cards[] = $this->draw_card();
            $dealer_score = $this->calculate_score( $this->dealer_cards );
        }
    }

    // 카드 합 계산
    private function calculate_score($cards)
    {
        $score = 0;
        $num_of_ace = 0;
    
        foreach ($cards as $card) {
            if ($card === null) {
                continue;
            }
    
            $num = substr($card, 0, -3);
            if ($num == 'A') {
                $num_of_ace++;
                $score += 11;
            } else if ($num == 'K' || $num == 'Q' || $num == 'J' || $num == '10') {
                $score += 10;
            } else {
                $score += intval($num);
            }
        }
    
        while ($score > 21 && $num_of_ace > 0) {
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

        // 처음 뽑은 2장의 카드를 보여주기
        echo "User Cards : ".implode( ", ", $this->user_cards )."\n";
        // echo "Dealer Cards: ".implode( ", ", $this->dealer_cards )."\n"; // debug용으로 딜러 카드 표시함.

        // 유저 블랙잭
        if( $user_score == 21 )
        {
            echo "Dealer Cards: ".implode( ", ", $this->dealer_cards )."\nUser has BlackJack!\nUser wins!";
			exit;
		}
	
		// 딜러 블랙잭
		if( $dealer_score == 21 )
		{
			echo "Dealer Cards: ".implode( ", ", $this->dealer_cards )."\nDealer has BlackJack!\nDealer wins!";
			exit;
		}

        // 유저 + 딜러 모두 블랙잭
        if( $user_score == 21 && $dealer_score == 21 )
        {
            echo "Dealer Cards: ".implode( ", ", $this->dealer_cards )."\nIt's a tie!\n";
            exit;
        }
	
		// 유저가 버스트인 경우
		if( $user_score > 21 )
		{
			echo "Dealer Cards: ".implode( ", ", $this->dealer_cards )."\nUser is busted!\nDealer wins!";
			exit;
		}
	
		// 딜러가 버스트인 경우
		if( $dealer_score > 21 )
		{
			echo "Dealer Cards: ".implode( ", ", $this->dealer_cards )."\nDealer is busted!\nUser wins!";
			exit;
		}

		// 카드 합 비교
        $input = readline("Enter 1 to draw a card, 2 to compare the scores or 0 to end the game: ");

        while( $input != '0' )
        {
            if( $input == '1' )
            {
                $this->user_cards[] = $this->draw_card();
                $this->dealer_cards[] = $this->dealer_draw();
                $user_score = $this->calculate_score( $this->user_cards );
                $dealer_score = $this->calculate_score( $this->dealer_cards );
                
                if( $user_score == 21 )
                {
                    echo "Dealer Cards: ".implode( ", ", $this->dealer_cards )."\nUser Cards: ".implode( ", ", $this->user_cards )."\nUser score = 21!\nUser wins!";
                    exit;
                }
                elseif( $user_score > 21 )
                {
                    echo "Dealer Cards: ".implode( ", ", $this->dealer_cards )."\nUser Cards: ".implode( ", ", $this->user_cards )."\nUser is busted!\nDealer wins!";
                    exit;
                }
                elseif( $dealer_score > 21 )
                {
                    echo "Dealer Cards: ".implode( ", ", $this->dealer_cards )."\nUser Cards: ".implode( ", ", $this->user_cards )."\nDealer is busted!\nUser wins!";
                    exit;
                }
                else
                {
                    echo "\nUser Cards: ".implode( ", ", $this->user_cards )."\n";
                    // echo "\nDealer Cards: ".implode( ", ", $this->dealer_cards )."\n"; // debug용으로 딜러 카드 표시함.
                }
            }
            elseif( $input == '2' )
            {
                if( $user_score > $dealer_score )
                {
                    echo "Dealer Cards: ".implode( ", ", $this->dealer_cards )."\nUser Cards: ".implode( ", ", $this->user_cards )."\nUser score is higher than Dealer score!\nUser wins!";
                }
                elseif( $user_score < $dealer_score )
                {
                    echo "Dealer Cards: ".implode( ", ", $this->dealer_cards )."\nUser Cards: ".implode( ", ", $this->user_cards )."\nUser score is lower than Dealer score!\nDealer wins!";
                }
                else
                {
                    echo "Dealer Cards: ".implode( ", ", $this->dealer_cards )."\nUser Cards: ".implode( ", ", $this->user_cards )."\nIt's a tie!";
                }
                exit;
            }
            else
            {
                echo "You have entered an incorrect number. Please try again.\n";
            }
    
            $input = readline("Enter 1 to draw a card, 2 to compare the scores or 0 to end the game: ");
        }
    
        echo "Game over!";
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