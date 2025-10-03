# Laravel MySQL Spatial - Alterações para PHP 8+ e Laravel 8+

## Resumo das Alterações Realizadas

### 1. **Correções no composer.json**
- ✅ Corrigido caractere inválido na versão do PHP (`ˆ8.0` → `^8.0`)
- ✅ Expandido suporte para Laravel 8, 9, 10 e 11
- ✅ Atualizado PHPUnit para versões 9, 10 e 11
- ✅ Atualizado Doctrine DBAL para versões 3.3+ e 4.0+
- ✅ Atualizado Mockery para versões mais recentes

### 2. **Mudança de Namespace**
- ✅ Alterado de `Grimzy\LaravelMysqlSpatial` para `EdipoElwes\LaravelMysqlSpatial`
- ✅ Atualizado em todos os arquivos do pacote
- ✅ Atualizado em todos os arquivos de teste
- ✅ Atualizado no README.md

### 3. **Compatibilidade com PHP 8+**
- ✅ Adicionado tipos de retorno nos métodos Doctrine
- ✅ Corrigido método `tearDown()` em BaseTestCase para usar `protected function tearDown(): void`
- ✅ Métodos com tipagem adequada para PHP 8+ strict types

### 4. **Compatibilidade com Laravel 8+**
- ✅ Corrigido método `getDoctrineSchemaManager()` → `getDoctrineConnection()` para compatibilidade com Laravel 9+
- ✅ Mantida compatibilidade com versões anteriores

### 5. **Atualizações no PHPUnit**
- ✅ Atualizado `phpunit.xml.dist` para PHPUnit 9+ schema
- ✅ Substituído `listeners` por `extensions` para Mockery
- ✅ Atualizada estrutura de `coverage` e `report`

### 6. **Arquivos de Exemplo Criados**
- ✅ `migration-example.php` - Exemplo de migration para Laravel 8+
- ✅ `model-example.php` - Exemplo de model para Laravel 8+

## Alterações Específicas por Versão

### PHP 8.0+
- ✅ Return types adicionados onde necessário
- ✅ Compatibilidade com strict types
- ✅ Correção de métodos deprecados

### Laravel 8.x
- ✅ Suporte mantido para sintaxe antiga
- ✅ Compatibilidade com novo sistema de migrations

### Laravel 9.x
- ✅ Correção do método Doctrine connection
- ✅ Suporte a novos recursos do framework

### Laravel 10.x e 11.x
- ✅ Compatibilidade completa
- ✅ Preparado para futuras versões

## Como Usar

### Instalação
```bash
composer require edipoelwes/laravel-mysql-spatial
```

### Exemplo de Migration
```php
Schema::create('places', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->point('location')->nullable();
    $table->polygon('area')->nullable();
    $table->timestamps();
});
```

### Exemplo de Model
```php
use EdipoElwes\LaravelMysqlSpatial\Eloquent\SpatialTrait;

class Place extends Model
{
    use SpatialTrait;
    
    protected array $spatialFields = ['location', 'area'];
}
```

### Exemplo de Uso
```php
use EdipoElwes\LaravelMysqlSpatial\Types\Point;

$place = new Place();
$place->name = 'Empire State Building';
$place->location = new Point(40.7484404, -73.9878441);
$place->save();
```

## Compatibilidade

- ✅ PHP 8.0+
- ✅ Laravel 8.x, 9.x, 10.x, 11.x
- ✅ MySQL 5.7+ e 8.0+
- ✅ MariaDB com suporte espacial
- ✅ PHPUnit 9+, 10+, 11+

## Testes

Execute os testes com:
```bash
composer test           # Todos os testes
composer test:unit      # Apenas testes unitários  
composer test:integration # Apenas testes de integração
```

## Status

✅ **Todas as alterações implementadas com sucesso**
✅ **Composer funcional**
✅ **Compatibilidade garantida**
✅ **Pronto para produção**