<? namespace Bitrix\Main\Security\W; use Bitrix\Main\Security\W\Rules\Rule; use Bitrix\Main\Security\W\Rules\Results\RuleResult; class HandlingResult{ protected string $_1116453102; protected array $_1136032341; protected RuleResult $_789790873; protected Rule $_184618453;  public function __construct(string $_1116453102, array $_1136032341, RuleResult $_789790873, Rule $_184618453){ $this->_1116453102= $_1116453102; $this->_1136032341= $_1136032341; $this->_789790873= $_789790873; $this->_184618453= $_184618453;} public function getContextName(): string{ return $this->_1116453102;} public function setContextName(string $_1116453102): void{ $this->_1116453102= $_1116453102;} public function getContextKey(): array{ return $this->_1136032341;} public function setContextKey(array $_1136032341): void{ $this->_1136032341= $_1136032341;} public function getRuleResult(): RuleResult{ return $this->_789790873;} public function setRuleResult(RuleResult $_789790873): void{ $this->_789790873= $_789790873;} public function getRule(): Rule{ return $this->_184618453;} public function setRule(Rule $_184618453): void{ $this->_184618453= $_184618453;}}?>